<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pay extends CI_Controller
{

	public function index()
	{
		return redirect()->to('Infopage');
	}

	/* START : Card Offer loan */
	public function cardoffer()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('card-offer');
		$banklist = $this->Site_Info_Model->getbanklist(8);
		$testimoniallist = $this->Site_Info_Model->gettestimoniallist(1);

		if ($prores->inOffer == 1) {
			$productdata = array(
				'inOffer' => $prores->inOffer,
				'amount' => $prores->amount,
				'offeramount' => $prores->offeramount,
				'offerdate' => date('Y/m/d', strtotime('+1 days')) . ' 24:00:00',
				'payamount' => $prores->offeramount + ($prores->offeramount * 0.18)
			);
		} else {
			$productdata = array(
				'inOffer' => 0,
				'amount' => $prores->amount,
				'offeramount' => 0,
				'offerdate' => '',
				'payamount' => $prores->amount + ($prores->amount * 0.18)
			);
		}

		$this->load->model('Site_Info_Model');
		$roipackages = $this->Site_Info_Model->getroipackages(11);

		$this->load->view('cardoffer', ['meta' => $meta, 'productdata' => $productdata, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}

	public function getcardoffer()
	{
		$this->load->model('Site_Info_Model');
		$productdata = $this->Site_Info_Model->getproductdetails('card-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

		$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
		foreach ($uat_numbers as $uat_num) {
			if ($uat_num == $mobileno) {
				$grandamount = 1;
			}
		}

		$data = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'offerpage' => 3,
			'fullname' => $fullname,
			'mobile' => $mobileno,
			'emailid' => $emailid,
			'amount' => $grandamount,
			'isCustomer' => 0,
			'isActive' => 0,
			'isDelete' => 0
		);

		$this->load->model('Site_Onlineprocess_Model');
		$userid = $this->Site_Onlineprocess_Model->cardofferorder($data);

		$orderid = number_format(microtime(true) * 1000, 0, '.', '');

		$returnUrl = base_url('pay/cardresponse');
		$callbackUrl = base_url('pay/cardcallback');

		if (PHONEPE_MODE == "PROD") {
			$curlurl = 'https://api.phonepe.com/apis/hermes/pg/v1/pay';
		} else {
			$curlurl = 'https://api-preprod.phonepe.com/apis/hermes/pg/v1/pay';
		}

		$phonepedata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'entryfor' => 3,
			'userid' => $userid,
			'orderid' => $orderid,
			'orderamount' => $grandamount,
			'ordernote' => $productdata->productname
		);
		$this->load->model('Site_Payment_Gateway_Model');
		$response = $this->Site_Payment_Gateway_Model->phonepeentry($phonepedata);

		$data_res = array(
			"merchantId" => PHONEPE_MID,
			"merchantTransactionId" => strval($orderid),
			"merchantUserId" => strval($userid),
			"amount" => $grandamount * 100,
			"redirectUrl" => $returnUrl,
			"redirectMode" => "POST",
			"callbackUrl" => $callbackUrl,
			"mobileNumber" => strval($mobileno),
			"paymentInstrument" => array(
				"type" => "PAY_PAGE"
			)
		);

		$this->load->helper('phonepe');
		$payurl = getpaymenturl($curlurl, PHONEPE_KEY, PHONEPE_KEY_INDEX, $data_res);

		if ($payurl) {
			if ($payurl->data->instrumentResponse->redirectInfo->url) {
				header("location:" . $payurl->data->instrumentResponse->redirectInfo->url);
				die;
			} else {
				return redirect("cardoffer");
				die;
			}
		} else {
			return redirect("cardoffer");
			die;
		}
	}

	public function cardresponse()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (!isset($_POST["code"]) || !isset($_POST["transactionId"]) || !isset($_POST["providerReferenceId"])) {
			return redirect("cardoffer");
			die;
		}

		$this->load->model('Site_Payment_Gateway_Model');
		$paymentdata = $this->Site_Payment_Gateway_Model->getphonepeentry($_POST["transactionId"]);

		$txStatus = $_POST["code"];
		$transactionId = $_POST["transactionId"];
		$referenceId = $_POST["providerReferenceId"];

		$phonepedata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'referenceid' => $referenceId,
			'txstatus' => $txStatus
		);

		$response1 = $this->Site_Payment_Gateway_Model->updatephonepeentry($paymentdata->id, $phonepedata);

		$this->load->model('Site_Onlineprocess_Model');
		$userdata = $this->Site_Onlineprocess_Model->checkcardofferdata($paymentdata->userid);

		if ($txStatus == "PAYMENT_SUCCESS") {
			$isentry = $this->Site_Onlineprocess_Model->checkcardofferentry($referenceId);
			if ($isentry == 0) {
				$cardno = random_code(16);

				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'amount' => $paymentdata->orderamount,
					'paymentid' => $referenceId,
					'isActive' => 1
				);

				$response = $this->Site_Onlineprocess_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Onlineprocess_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('cardoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$this->load->view('cardoffer-response', ['meta' => $meta, 'status' => 'true']);
			}
		} else if ($txStatus == "PAYMENT_FAILURE") {
			$sent = $this->Site_Onlineprocess_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('cardoffer-response', ['meta' => $meta, 'status' => 'false']);
		} else {
			$sent = $this->Site_Onlineprocess_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('cardoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}

	/* STOP : Card Offer loan */

	/* START : IVRpayment Offer loan */
	public function ivrpaymentoffer()
	{
		return redirect()->to('/');
		die;
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('ivrpayment-offer');

		$banklist = $this->Site_Info_Model->getbanklist(8);
		$testimoniallist = $this->Site_Info_Model->gettestimoniallist(1);

		if ($prores->inOffer == 1) {
			$productdata = array(
				'inOffer' => $prores->inOffer,
				'amount' => $prores->amount,
				'offeramount' => $prores->offeramount,
				'offerdate' => date('Y/m/d', strtotime('+1 days')) . ' 24:00:00',
				'payamount' => $prores->offeramount + ($prores->offeramount * 0.18)
			);
		} else {
			$productdata = array(
				'inOffer' => 0,
				'amount' => $prores->amount,
				'offeramount' => 0,
				'offerdate' => '',
				'payamount' => $prores->amount + ($prores->amount * 0.18)
			);
		}

		$this->load->model('Site_Info_Model');
		$roipackages = $this->Site_Info_Model->getroipackages(11);

		$this->load->view('ivrpaymentoffer', ['meta' => $meta, 'productdata' => $productdata, 'roipackages' => $roipackages, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}

	public function getivrpaymentoffer()
	{
		$this->load->model('Site_Info_Model');
		$productdata = $this->Site_Info_Model->getproductdetails('ivrpayment-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

		$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
		foreach ($uat_numbers as $uat_num) {
			if ($uat_num == $mobileno) {
				$grandamount = 1;
			}
		}

		$data = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'offerpage' => 4,
			'fullname' => $fullname,
			'mobile' => $mobileno,
			'emailid' => $emailid,
			'amount' => $grandamount,
			'isCustomer' => 0,
			'isActive' => 0,
			'isDelete' => 0
		);

		$this->load->model('Site_Onlineprocess_Model');
		$userid = $this->Site_Onlineprocess_Model->cardofferorder($data);

		$orderid = number_format(microtime(true) * 1000, 0, '.', '');

		$returnUrl = base_url('pay/cardreturn');
		$callbackUrl = base_url('pay/cardcallback');

		if (PHONEPE_MODE == "PROD") {
			$curlurl = 'https://api.phonepe.com/apis/hermes/pg/v1/pay';
		} else {
			$curlurl = 'https://api-preprod.phonepe.com/apis/hermes/pg/v1/pay';
		}

		$phonepedata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'entryfor' => 4,
			'userid' => $userid,
			'orderid' => $orderid,
			'orderamount' => $grandamount,
			'ordernote' => $productdata->productname
		);
		$this->load->model('Site_Payment_Gateway_Model');
		$response = $this->Site_Payment_Gateway_Model->phonepeentry($phonepedata);

		$data_res = array(
			"merchantId" => PHONEPE_MID,
			"merchantTransactionId" => strval($orderid),
			"merchantUserId" => strval($userid),
			"amount" => $grandamount * 100,
			"redirectUrl" => $returnUrl,
			"redirectMode" => "POST",
			"callbackUrl" => $callbackUrl,
			"mobileNumber" => strval($mobileno),
			"paymentInstrument" => array(
				"type" => "PAY_PAGE"
			)
		);

		$this->load->helper('phonepe');
		$payurl = getpaymenturl($curlurl, PHONEPE_KEY, PHONEPE_KEY_INDEX, $data_res);

		if ($payurl) {
			if ($payurl->data->instrumentResponse->redirectInfo->url) {
				header("location:" . $payurl->data->instrumentResponse->redirectInfo->url);
				die;
			} else {
				return redirect("ivrpaymentoffer");
				die;
			}
		} else {
			return redirect("ivrpaymentoffer");
			die;
		}
	}
	public function cardreturn()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (!isset($_POST["code"]) || !isset($_POST["transactionId"]) || !isset($_POST["providerReferenceId"])) {
			return redirect("ivrpaymentoffer");
			die;
		}

		$this->load->model('Site_Payment_Gateway_Model');
		$paymentdata = $this->Site_Payment_Gateway_Model->getphonepeentry($_POST["transactionId"]);

		$txStatus = $_POST["code"];
		$transactionId = $_POST["transactionId"];
		$referenceId = $_POST["providerReferenceId"];

		$phonepedata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'referenceid' => $referenceId,
			'txstatus' => $txStatus
		);

		$response1 = $this->Site_Payment_Gateway_Model->updatephonepeentry($paymentdata->id, $phonepedata);

		$this->load->model('Site_Onlineprocess_Model');
		$userdata = $this->Site_Onlineprocess_Model->checkcardofferdata($paymentdata->userid);

		if ($txStatus == "PAYMENT_SUCCESS") {
			$isentry = $this->Site_Onlineprocess_Model->checkcardofferentry($referenceId);
			if ($isentry == 0) {
				$cardno = random_code(16);

				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'amount' => $paymentdata->orderamount,
					'paymentid' => $referenceId,
					'isActive' => 1
				);

				$response = $this->Site_Onlineprocess_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Onlineprocess_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'true']);
			}
		} else if ($txStatus == "PAYMENT_FAILURE") {
			$sent = $this->Site_Onlineprocess_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'false']);
		} else {
			$sent = $this->Site_Onlineprocess_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}

	public function cardcallback()
	{
		die;
	}
	/*public function ivrpaymentresponse()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (isset($_REQUEST['paymentid']) && $_REQUEST['paymentid'] != '') {
			$this->load->model('Site_Payment_Gateway_Model');
			$paymentdata = $this->Site_Payment_Gateway_Model->getrazorpayentry($_POST["orderid"]);

			$razorpaydata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'referenceid' => $_REQUEST['paymentid'],
				'txstatus' => 'Success'
			);

			$response1 = $this->Site_Payment_Gateway_Model->updaterazorpayentry($paymentdata->id, $razorpaydata);

			$this->load->model('Site_Onlineprocess_Model');
			$userdata = $this->Site_Onlineprocess_Model->checkcardofferdata($paymentdata->userid);

			$amount = (isset($_REQUEST['orderamount'])) ? $_REQUEST['orderamount'] : 0;
			$paymentid = (isset($_REQUEST['paymentid'])) ? $_REQUEST['paymentid'] : '';

			$isentry = $this->Site_Onlineprocess_Model->checkcardofferentry($paymentid);

			if ($isentry == 0) {
				$cardno = random_code(16);

				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'amount' => $amount,
					'paymentid' => $paymentid,
					'isActive' => 1
				);

				$response = $this->Site_Onlineprocess_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Onlineprocess_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'true']);
			}
		} else {
			$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}*/

	/* END : IVRpayment Offer loan */

	/* START : Special Offer loan */
	public function specialoffer()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('special-offer');
		$banklist = $this->Site_Info_Model->getbanklist(8);
		$testimoniallist = $this->Site_Info_Model->gettestimoniallist(1);

		if ($prores->inOffer == 1) {
			$productdata = array(
				'inOffer' => $prores->inOffer,
				'amount' => $prores->amount,
				'offeramount' => $prores->offeramount,
				'offerdate' => date('Y/m/d', strtotime('+1 days')) . ' 24:00:00',
				'payamount' => $prores->offeramount + ($prores->offeramount * 0.18)
			);
		} else {
			$productdata = array(
				'inOffer' => 0,
				'amount' => $prores->amount,
				'offeramount' => 0,
				'offerdate' => '',
				'payamount' => $prores->amount + ($prores->amount * 0.18)
			);
		}

		$this->load->model('Site_Info_Model');
		$roipackages = $this->Site_Info_Model->getroipackages(11);

		$this->load->view('specialoffer', ['meta' => $meta, 'productdata' => $productdata, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}

	public function getspecialoffer()
	{

		$this->load->model('Site_Info_Model');
		$productdata = $this->Site_Info_Model->getproductdetails('special-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

		$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
		foreach ($uat_numbers as $uat_num) {
			if ($uat_num == $mobileno) {
				$grandamount = 1;
			}
		}

		$data = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'offerpage' => 5,
			'fullname' => $fullname,
			'mobile' => $mobileno,
			'emailid' => $emailid,
			'amount' => $grandamount,
			'registration_date' => date('Y-m-d'),
			'expiry_date' => date('Y-m-d', strtotime('+6 months')),
			'isCustomer' => 0,
			'isActive' => 0,
			'isDelete' => 0
		);

		$this->load->model('Site_Onlineprocess_Model');
		$userid = $this->Site_Onlineprocess_Model->cardofferorder($data);

		$orderId = "ZPLive" . number_format(microtime(true) * 1000, 0, '.', '');
		$returnUrl = base_url('pay/specialreturn');

		if (ZAAKPAY_MODE == "PROD") {
			$url = "https://api.zaakpay.com/api/paymentTransact/V8";
		} else {
			$url = "https://zaakstaging.zaakpay.com/api/paymentTransact/V8";
		}

		$postData = array(
			"merchantIdentifier" => ZAAKPAY_MERCHANT_IDENTIFIER,
			"orderId" => $orderId,
			"returnUrl" => $returnUrl,
			"currency" => 'INR',
			"amount" => $grandamount * 100,
			"buyerEmail" => $emailid,
			"buyerFirstName" => $fullname,
			"buyerPhoneNumber" => $mobileno,
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
			'entryfor' => 5,
			'productid' => $productdata->id,
			'userid' => $userid,
			'orderid' => $orderId,
			'orderamount' => $grandamount,
			'ordernote' => $productdata->productname
		);

		$this->load->model('Site_Payment_Gateway_Model');
		$response = $this->Site_Payment_Gateway_Model->zaakpayentry($zaakpaydata);

		$this->load->view('zaakpay-checkout', ['postData' => $postData, 'checksum' => $checksum, 'url' => $url]);

	}

	public function specialreturn()
	{
		
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

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

			$this->load->model('Site_Onlineprocess_Model');
			$userdata = $this->Site_Onlineprocess_Model->checkcardofferdata($paymentdata->userid);

			if ($responseCode == 100 || $responseCode == 208 || $responseCode == 601) {
				$cardno = random_code(16);

				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'amount' => $orderAmount,
					'paymentid' => $txnId,
					'isActive' => 1
				);

				$response = $this->Site_Onlineprocess_Model->updatecardofferorder($paymentdata->userid, $data);
				$sent = $this->Site_Onlineprocess_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('specialoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$sent = $this->Site_Onlineprocess_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
				$this->load->view('specialoffer-response', ['meta' => $meta, 'status' => 'false']);
			}
		} else {
			$this->load->view('specialoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}

	public function test()
	{
		$this->load->view('ivrpaymentoffer-response', ['status' => 'true']);
	}
	public function specialcallback()
	{
		die;
	}
	/* STOP : Special Offer loan */

	/* START : Bumper Offer loan */
	public function bumperoffer()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('bumper-offer');
		$banklist = $this->Site_Info_Model->getbanklist(8);
		$testimoniallist = $this->Site_Info_Model->gettestimoniallist(1);

		if ($prores->inOffer == 1) {
			$productdata = array(
				'inOffer' => $prores->inOffer,
				'amount' => $prores->amount,
				'offeramount' => $prores->offeramount,
				'offerdate' => date('Y/m/d', strtotime('+1 days')) . ' 24:00:00',
				'payamount' => $prores->offeramount + ($prores->offeramount * 0.18)
			);
		} else {
			$productdata = array(
				'inOffer' => 0,
				'amount' => $prores->amount,
				'offeramount' => 0,
				'offerdate' => '',
				'payamount' => $prores->amount + ($prores->amount * 0.18)
			);
		}

		$this->load->model('Site_Info_Model');
		$roipackages = $this->Site_Info_Model->getroipackages(11);

		$this->load->view('bumperoffer', ['meta' => $meta, 'productdata' => $productdata, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}

	public function getbumperoffer()
	{
		$this->load->model('Site_Payment_Gateway_Model');
		$this->load->model('Site_Onlineprocess_Model');
		$this->load->model('Site_Info_Model');
		$productdata = $this->Site_Info_Model->getproductdetails('bumper-offer');

		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = floor($amount + ($amount * 0.18));

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

		$this->load->model('Site_Onlineprocess_Model');

		$existingUser = $this->Site_Onlineprocess_Model->checkexistinguser($mobileno);

		// Check if mobile number exists
		if ($existingUser) {

			$message = "You are already a registered customer. Kindly login to customer panel. <a href='" . site_url('customer') . "'>Click here</a>";
			$this->session->set_flashdata('danger', $message);
			redirect('bumperoffer');
		} else {
		$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
		foreach ($uat_numbers as $uat_num) {
			if ($uat_num == $mobileno) {
				$grandamount = 1;
			}
		}

		$data = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'offerpage' => 6,
			'fullname' => $fullname,
			'mobile' => $mobileno,
			'emailid' => $emailid,
			'amount' => $grandamount,
			'isCustomer' => 0,
			'isActive' => 0,
			'isDelete' => 0,
		);

		$userid = $this->Site_Onlineprocess_Model->cardofferorder($data);

		$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		$udf1 = $udf2 = $udf3 = $udf4 = $udf5 = '';
		$postData = array();

		$hashstring = PAYU_MERCHANT_KEY . '|' . $txnid . '|' . $grandamount . '|' . $productdata->productname . '|' . $fullname . '|' . $emailid . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . PAYU_SALT;

		$hash = hash('sha512', $hashstring);

		$returnUrl = base_url('pay/bumperreturn');

		if (PAYU_MODE == "PROD") {
			$url = 'https://secure.payu.in/_payment';
		} else {
			$url = 'https://test.payu.in/_payment';
		}

		$postData = array(
			'mkey' => PAYU_MERCHANT_KEY,
			'tid' => $txnid,
			'hash' => $hash,
			'amount' => $grandamount,
			'name' => $fullname,
			'productinfo' => $productdata->productname,
			'mailid' => $emailid,
			'phoneno' => $mobileno,
			'address' => '',
			'action' => $url,
			'returnUrl' => $returnUrl,
		);

		$payudata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'entryfor' => 6,
			'userid' => $userid,
			'orderid' => $txnid,
			'orderamount' => $grandamount,
			'ordernote' => $productdata->productname,
		);

		$payuentry = $this->Site_Payment_Gateway_Model->payuentry($payudata);

		$userdata = $this->Site_Onlineprocess_Model->checkuser($mobileno);
		if ($userdata) {
			$data1 = array(
				'update_date' => date('Y-m-d H:i:s'),
			);
			$response1 = $this->Site_Onlineprocess_Model->updateregistration($userdata->userid, $data1);
		}

		$this->load->view('payu-checkout', ['postData' => $postData]);
		}
	}

	public function bumperreturn()
	{
		$this->load->model('Site_Onlineprocess_Model');
		$this->load->model('Site_Payment_Gateway_Model');
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (isset($_POST["status"]) && $_POST["status"] != "") {
			$status = $_POST["status"];
			$firstname = $_POST["firstname"];
			$amount = $_POST["amount"];
			$txnid = $_POST["txnid"];
			$posted_hash = $_POST["hash"];
			$key = $_POST["key"];
			$productinfo = $_POST["productinfo"];
			$email = $_POST["email"];
			$additionalCharges = $_POST["additionalCharges"];
			$mihpayid = $_POST["mihpayid"];
			$pgtype = $_POST["PG_TYPE"];
			$salt = PAYU_SALT;

			if (isset($additionalCharges)) {
				$retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
			} else {
				$retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
			}

			
			$paymentdata = $this->Site_Payment_Gateway_Model->getpayuentry($txnid);

			$payudata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'referenceid' => $mihpayid,
				'txstatus' => $status,
				'paymentmode' => $pgtype,
			);

			$response1 = $this->Site_Payment_Gateway_Model->updatepayuentry($paymentdata->id, $payudata);
			$userdata = $this->Site_Onlineprocess_Model->checkcardofferdata($paymentdata->userid);

			if ($status == 'success') {
				$cardno = random_code(16);
				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'amount' => $amount,
					'paymentid' => $mihpayid,
					'isActive' => 1,
				);

				$response = $this->Site_Onlineprocess_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Onlineprocess_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('bumperoffer-response', ['meta' => $meta, 'status' => $response]);
			} else if ($status == 'failure') {
				$this->load->view('bumperoffer-response', ['meta' => $meta, 'status' => 'false']);
			} else {
				$this->load->view('bumperoffer-response', ['meta' => $meta, 'status' => 'false']);
			}
		} else {
			$this->load->view('bumperoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}

	public function bumpercallback()
	{
		die;
	}
	/* STOP : Bumper Offer loan */

	/* START : Festival Offer loan */
	public function festivaloffer()
	{
		return redirect()->to('/');
		die;
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('festival-offer');
		$banklist = $this->Site_Info_Model->getbanklist(8);
		$testimoniallist = $this->Site_Info_Model->gettestimoniallist(1);

		if ($prores->inOffer == 1) {
			$productdata = array(
				'inOffer' => $prores->inOffer,
				'amount' => $prores->amount,
				'offeramount' => $prores->offeramount,
				'offerdate' => date('Y/m/d', strtotime('+1 days')) . ' 24:00:00',
				'payamount' => $prores->offeramount + ($prores->offeramount * 0.18)
			);
		} else {
			$productdata = array(
				'inOffer' => 0,
				'amount' => $prores->amount,
				'offeramount' => 0,
				'offerdate' => '',
				'payamount' => $prores->amount + ($prores->amount * 0.18)
			);
		}

		$this->load->model('Site_Info_Model');
		$roipackages = $this->Site_Info_Model->getroipackages(11);

		$this->load->view('festivaloffer', ['meta' => $meta, 'productdata' => $productdata, 'roipackages' => $roipackages, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}

	public function getfestivaloffer()
	{
		$this->load->model('Site_Info_Model');
		$this->load->model('Site_Payment_Gateway_Model');

		$productdata = $this->Site_Info_Model->getproductdetails('festival-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);
		$roundamount = floor($grandamount);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

		$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
		foreach ($uat_numbers as $uat_num) {
			if ($uat_num == $mobileno) {
				$grandamount = 1;
			}
		}

		$data = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'offerpage' => 7,
			'fullname' => $fullname,
			'mobile' => $mobileno,
			'emailid' => $emailid,
			'amount' => $grandamount,
			'isCustomer' => 0,
			'isActive' => 0,
			'isDelete' => 0
		);

		$this->load->model('Site_Onlineprocess_Model');
		$userid = $this->Site_Onlineprocess_Model->cardofferorder($data);

		$orderid = number_format(microtime(true) * 1000, 0, '.', '');
		$encData = null;

		if (SABPAISA_MODE == 'PROD') {
			$spDomain = "https://securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1";
		} else {
			$spDomain = "https://stage-securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1";
		}

		$returnUrl = base_url('pay/festivalresponse');

		$encData = "?clientCode=" . SABPAISA_CLIENT_CODE . "&transUserName=" . SABPAISA_USERNAME . "&transUserPassword=" . SABPAISA_PASSWORD . "&amount=" . $roundamount . "&amountType=INR&clientTxnId=" . trim($orderid) . "&payerName=" . trim($fullname) . "&payerMobile=" . trim($mobileno) . "&payerEmail=" . trim($emailid) . "&mcc=5137&channelId=#&callbackUrl=" . $returnUrl;

		$this->load->helper('subpaisa');
		$encryptData = encrypt(SABPAISA_AUTH_KEY, SABPAISA_AUTH_IV, $encData);

		$postData = array(
			'clientCode' => SABPAISA_CLIENT_CODE,
			'encryptData' => $encryptData,
			'action' => $spDomain
		);

		$subpaisadata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'entryfor' => 7,
			'userid' => $userid,
			'orderid' => $orderid,
			'orderamount' => $roundamount,
			'ordernote' => $productdata->productname
		);
		$response = $this->Site_Payment_Gateway_Model->subpaisaentry($subpaisadata);

		$this->load->view('sabpaisa-checkout', ['postData' => $postData]);
	}

	public function festivalresponse()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		$grandtotal = $netamount = $cgstamount = $sgstamount = $igstamount = 0;
		$decText = null;

		if (isset($_REQUEST)) {
			$query = $_REQUEST['encResponse'];
			$query = str_replace("%2B", "+", $query);
			$decText = null;

			$this->load->helper('subpaisa');
			$decText = decrypt(SABPAISA_AUTH_KEY, SABPAISA_AUTH_IV, $query);
			$token = strtok($decText, "&");

			$i = 0;
			while ($token !== false) {
				$i = $i + 1;
				$token1 = strchr($token, "=");
				$token = strtok("&");
				$stringpart = ltrim($token1, "=");

				if ($i == 1) {
					$payerName = $stringpart;
				}
				if ($i == 2) {
					$payerEmail = $stringpart;
				}
				if ($i == 3) {
					$payerMobile = $stringpart;
				}
				if ($i == 4) {
					$clientTxnId = $stringpart;
				}
				if ($i == 6) {
					$amount = $stringpart;
				}
				if ($i == 8) {
					$paidAmount = $stringpart;
				}
				if ($i == 9) {
					$paymentMode = $stringpart;
				}
				if ($i == 10) {
					$bankName = $stringpart;
				}
				if ($i == 12) {
					$status = $stringpart;
				}
				if ($i == 13) {
					$statusCode = $stringpart;
				}
				if ($i == 15) {
					$sabpaisaTxnId = $stringpart;
				}
				if ($i == 20) {
					$bankTxnId = $stringpart;
				}
			}

			$this->load->model('Site_Onlineprocess_Model');
			$this->load->model('Site_Payment_Gateway_Model');
			$paymentdata = $this->Site_Payment_Gateway_Model->getsubpaisaentry($clientTxnId);

			$subpaisadata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'referenceid' => $sabpaisaTxnId,
				'txstatus' => $status,
				'paymentmode' => $paymentMode
			);

			$response1 = $this->Site_Payment_Gateway_Model->updatesubpaisaentry($paymentdata->id, $subpaisadata);

			if ($statusCode == '0000') {
				$userdata = $this->Site_Payment_Gateway_Model->checkcardofferdata($paymentdata->userid);

				$cardno = random_code(16);
				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'paymentid' => $sabpaisaTxnId,
					'isActive' => 1
				);

				$response = $this->Site_Onlineprocess_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Onlineprocess_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => $response]);
			} else if ($statusCode == '0300') {
				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
			} else {
				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
			}
		} else {
			$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}
	/* END : Festival Offer loan */
}
