<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Order extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}


	public function checkoutDigital()
	{

		$this->load->model('Site_Onlineprocess_Model');
		$userdata = $this->Site_Onlineprocess_Model->checkuserdata($_REQUEST['applyid']);
		$this->session->set_tempdata('applyid', $_REQUEST['applyid']);
		$key = stringCrypt($_REQUEST['applyid'], 'encrypt');

		$data3 = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'status' => 1,
			'isDelete' => 0
		);
		$response3 = $this->Site_Onlineprocess_Model->updateapplication($_REQUEST['applyid'], $data3);

		$productslug = ($userdata->cardtype == 12) ? "business-subscription-plan" : "personal-subscription-plan";

		$this->load->model('Site_Info_Model');
		$productdata = $this->Site_Info_Model->getproductdetails($productslug);
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);

		$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
		foreach ($uat_numbers as $uat_num) {
			if ($uat_num == $userdata->mobile) {
				$grandamount = 1;
			}
		}

		$orderid = "ZPLive" . number_format(microtime(true) * 1000, 0, '.', '');
		$returnUrl = base_url('order/buycardDigital');

		$url = "https://api.zaakpay.com/api/paymentTransact/V8";

		$postData = array(
			"merchantIdentifier" => ZAAKPAY_MERCHANT_IDENTIFIER,
			"orderId" => $orderid,
			"returnUrl" => $returnUrl,
			"currency" => 'INR',
			"amount" => $grandamount * 100,
			"buyerEmail" => $userdata->email,
			"buyerFirstName" => $userdata->fullname,
			"buyerPhoneNumber" => $userdata->mobile,
			"buyerCountry" => 'India',
			"productDescription" => $productdata->productname
		);

		ksort($postData);
		$checksumData = "";
		foreach ($postData as $key => $value) {
			$checksumData .= $key . '=' . $value . '&';
		}

		$checksum = hash_hmac('sha256', $checksumData, ZAAKPAY_SECRET_KEY);

		$zaakpaydata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'entryfor' => $userdata->cardtype,
			'userid' => $userdata->userid,
			'orderid' => $orderid,
			'orderamount' => $grandamount,
			'ordernote' => $productdata->productname
		);

		$this->load->model('Site_Payment_Gateway_Model');
		$response = $this->Site_Payment_Gateway_Model->zaakpayentry($zaakpaydata);

		$this->load->view('zaakpay-checkout', ['postData' => $postData, 'checksum' => $checksum, 'url' => $url]);
	}

	public function buycardDigital()
	{
		$grandtotal = $netamount = $cgstamount = $sgstamount = $igstamount = 0;

		$orderId = $_POST["orderId"];
		$responseCode = $_POST["responseCode"];
		$orderAmount = $_POST["amount"] / 100;
		$txnId = $_POST["pgTransId"];
		$paymentMode = $_POST["paymentMode"];
		$recd_checksum = $_POST['checksum'];

		$checksum = $checksumData = '';
		$checksumsequence = array(
			"amount",
			"bank",
			"bankid",
			"cardId",
			"cardScheme",
			"cardToken",
			"cardhashid",
			"doRedirect",
			"orderId",
			"paymentMethod",
			"paymentMode",
			"responseCode",
			"responseDescription",
			"productDescription",
			"product1Description",
			"product2Description",
			"product3Description",
			"product4Description",
			"pgTransId",
			"pgTransTime"
		);

		foreach ($checksumsequence as $seqvalue) {
			if (array_key_exists($seqvalue, $_POST)) {
				$checksumData .= $seqvalue;
				$checksumData .= "=";
				$checksumData .= $_POST[$seqvalue];
				$checksumData .= "&";
			}
		}

		$checksum = hash_hmac('sha256', $checksumData, ZAAKPAY_SECRET_KEY);

		if ($checksum == $recd_checksum) {
			$this->load->model('Site_Payment_Gateway_Model');
			$paymentdata = $this->Site_Payment_Gateway_Model->getzaakpayentry($orderId);

			$zaakpaydata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'orderamount' => $orderAmount,
				'statuscode' => $responseCode,
				'transactionid' => $txnId,
				'paymentmode' => $paymentMode
			);

			$response1 = $this->Site_Payment_Gateway_Model->updatezaakpayentry($paymentdata->id, $zaakpaydata);

			if ($responseCode == 100 || $responseCode == 208 || $responseCode == 601) {
				$this->load->model('Site_Onlineprocess_Model');
				$userdata = $this->Site_Onlineprocess_Model->checkuserregdata($paymentdata->userid);

				$this->session->set_tempdata('applyid', $userdata->id);
				$cardno = random_code(16);

				if ($userdata->cardtype == 12) {
					$productslug = "business-subscription-plan";
					$invfor = 2;
					$invprefix = "BL_";
				} else {
					$productslug = "personal-subscription-plan";
					$invfor = 1;
					$invprefix = "PL_";
				}

				$this->load->model('Site_Info_Model');
				$productdata = $this->Site_Info_Model->getproductdetails($productslug);
				$netamount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;

				if ($userdata->state == 'Gujarat') {
					$cgstamount = $netamount * 0.09;
					$sgstamount = $netamount * 0.09;
				} else {
					$igstamount = $netamount * 0.18;
				}

				$grandtotal = $netamount + $cgstamount + $sgstamount + $igstamount;

				$mbrdata = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'userid' => $userdata->userid,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'card_number' => $cardno,
					'amount' => $orderAmount,
					'paymentid' => $txnId,
					'isActive' => 1,
					'isDelete' => 0
				);
				$memberid = $this->Site_Onlineprocess_Model->subscriptionorder($mbrdata);

				$password = random_code(6);
				$passwordkey = stringCrypt($password, 'encrypt');
				$refcode = strtolower(substr(str_replace(" ", "", $userdata->fullname), 0, 3));
				$refcode .= substr($userdata->mobile, -4);

				$data2 = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'password' => $passwordkey,
					'refcode' => $refcode,
					'process_step' => 4,
					'isUser' => 2
				);
				$response2 = $this->Site_Onlineprocess_Model->updateregistration($userdata->userid, $data2);

				$this->load->model('Site_Info_Model');
				$invoiceno = $this->Site_Info_Model->getinvoiceno();

				$data3 = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'userid' => $userdata->userid,
					'cardid' => $memberid,
					'inv_for' => $invfor,
					'inv_prefix' => $invprefix,
					'inv_number' => $invoiceno,
					'inv_date' => date('Y-m-d'),
					'inv_price' => $netamount,
					'inv_cgst' => $cgstamount,
					'inv_sgst' => $sgstamount,
					'inv_igst' => $igstamount,
					'inv_grandtotal' => $grandtotal,
					'isDelete' => 0
				);

				$exists_mobile = in_array($userdata->mobile, unserialize(UAT_MOBILE_NUMBERS), true);
				if (!$exists_mobile) {
					$responseinvoice = $this->Site_Onlineprocess_Model->generateinvoice($data3, $invoiceno);
				}
				
				$intkt_userwelcomename = $this->Site_Info_Model->getsmsmessage('intkt_userwelcomename');
				$data_usr_pass = array(
					"fullPhoneNumber" => '+91' . $userdata->mobile,
					"callbackData" => "some text here",
					"type" => "Template",
					"template" => array(
						"name" => $intkt_userwelcomename,
						"languageCode" => "en",
						"bodyValues" => array(
							$userdata->mobile,
							$password
						),
					)
				);
				$restrack4 = interakt_track($data_usr_pass);

				$maildata = array(
					'fullname' => $userdata->fullname,
					'mobile' => $userdata->mobile,
					'email' => $userdata->email,
					'password' => $password,
					'order_number' => $invoiceno,
					'order_date' => date('d-m-Y'),
					'order_amount' => $grandtotal
				);

				$sent = $this->Site_Onlineprocess_Model->sendSuccessGreetings($maildata);

				redirect("order/orderStatus/" . $response2);
			} else {
				return redirect("order/orderStatus/true");
				die;
			}

		} else {
			$key = stringCrypt($_REQUEST['applyid'], 'encrypt');
			redirect("onlineprocess/subscriptionorder/" . $key);
		}
	}

	public function orderStatus($status = '')
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('personal-subscription-plan');
		$wpcampaignname = $this->Site_Info_Model->getsmsmessage('wpcampaignsuccess');

		$fbclidpl = $applyid = "";

		$applyid = $this->session->tempdata('applyid');
		$this->load->model('Site_Onlineprocess_Model');
		$userdata = $this->Site_Onlineprocess_Model->checkuserdata($applyid);

		$apr = ($userdata->loantype == 12) ? 11.5 : 12.5;
		$eligibilityamt = calEligiblity($userdata->income, $userdata->currentemi, $apr, $userdata->loanamount);

		$data = array(
			'loantype' => $userdata->loantype,
			'username' => $userdata->fullname,
			'preamount' => $eligibilityamt,
			'status' => $status
		);


		if ($status != '') {
			if ($status == "true" && $applyid != "") {
				if ($applyid > 0) {

					$firstname = strtok($userdata->fullname, " ");
					$city = strtolower(preg_replace("/[^a-zA-Z]+/", "", $userdata->city));
					$state = strtolower(getStateAbbreviation($userdata->state));
					$orderid = date('md') . random_code(4);

					$fbdata = array(
						'type' => 'digital',
						'firstname' => $firstname,
						'mobile' => '91' . $userdata->mobile,
						'email' => strtolower($userdata->email),
						'city' => $city,
						'state' => $state,
						'orderid' => $orderid,
						'sourceurl' => base_url('/order/orderStatus/true')
					);

					if (get_cookie('fbclidpl') != "") {
						$fbclidpl = get_cookie('fbclidpl');
					}

					$fbdata['fbclid'] = $fbclidpl;

					$fbresponse = fbconversioncurl($fbdata);

					$data3 = array(
						'phoneNumber' => $userdata->mobile,
						'countryCode' => '+91',
						'event' => 'Payment Successful'
					);
					$this->load->helper('interakt');
					$restrack2 = event_track($data3);

					/*$data3 = array(
									   'apiKey' => AISENSY_KEY,
									   'campaignName' => $wpcampaignname,
									   'destination' => '+91' . $userdata->mobile,
									   'media' => array(
										   'url' => 'https://whatsapp-media-library.s3.ap-south-1.amazonaws.com/IMAGE/65c1e3a57fc9d24aed6fbe28/836110_ccps.jpeg',
										   'filename' => 'cc_ps.jpeg'
									   ),
									   'userName' => $userdata->fullname,
									   'templateParams' => array('$Name'),
									   'tags' => array('Payment Successful')
								   );
								   $restrack3 = aisensy_track($data3);*/

					$this->load->view('payment-response', ['meta' => $meta, 'responsedata' => $data]);
				} else {
					$this->load->view('payment-response', ['meta' => $meta, 'responsedata' => $data]);
				}
			} else if ($status == "false" && $applyid != "") {
				if ($applyid > 0) {

					/*$data3 = array(
									   'apiKey' => AISENSY_KEY,
									   'campaignName' => '19april_fail',
									   'destination' => '+91' . $userdata->mobile,
									   'media' => array(
										   'url' => 'https://whatsapp-media-library.s3.ap-south-1.amazonaws.com/IMAGE/65c1e3a57fc9d24aed6fbe28/2137918_ccfail.jpeg',
										   'filename' => 'cc_fail.jpeg'
									   ),
									   'userName' => $userdata->fullname,
									   'templateParams' => array('$Name'),
									   'tags' => array('Payment Failed')
								   );
								   $restrack3 = aisensy_track($data3);*/
				}

				$this->load->view('payment-response', ['meta' => $meta, 'responsedata' => $data]);
			} else {
				$this->load->view('payment-response', ['meta' => $meta, 'responsedata' => $data]);
			}
		} else {
			return redirect('onlineprocess/applynow');
			die;
		}
	}
}
