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

		$returnUrl = base_url('pay/cardreturn');
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

	public function cardreturn()
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

	public function cardcallback()
	{
		die;
	}
	/* STOP : Card Offer loan */

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
			'isCustomer' => 0,
			'isActive' => 0,
			'isDelete' => 0
		);

		$this->load->model('Site_Onlineprocess_Model');
		$userid = $this->Site_Onlineprocess_Model->cardofferorder($data);

		$orderid = number_format(microtime(true) * 1000, 0, '.', '');

		$returnUrl = base_url('pay/specialreturn');
		$callbackUrl = base_url('pay/specialcallback');

		if (PHONEPE_MODE == "PROD") {
			$curlurl = 'https://api.phonepe.com/apis/hermes/pg/v1/pay';
		} else {
			$curlurl = 'https://api-preprod.phonepe.com/apis/hermes/pg/v1/pay';
		}

		$phonepedata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'entryfor' => 5,
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
				return redirect("specialoffer");
				die;
			}
		} else {
			return redirect("specialoffer");
			die;
		}
	}

	public function specialreturn()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (!isset($_POST["code"]) || !isset($_POST["transactionId"]) || !isset($_POST["providerReferenceId"])) {
			return redirect("specialoffer");
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
		$userdata = $this->Site_Onlineprocess_Model->checkspecialofferdata($paymentdata->userid);

		if ($txStatus == "PAYMENT_SUCCESS") {
			$isentry = $this->Site_Onlineprocess_Model->checkspecialofferentry($referenceId);
			if ($isentry == 0) {
				$specialno = random_code(16);

				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'special_number' => $specialno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'amount' => $paymentdata->orderamount,
					'paymentid' => $referenceId,
					'isActive' => 1
				);

				$response = $this->Site_Onlineprocess_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Onlineprocess_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('specialoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$this->load->view('specialoffer-response', ['meta' => $meta, 'status' => 'true']);
			}
		} else if ($txStatus == "PAYMENT_FAILURE") {
			$sent = $this->Site_Onlineprocess_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('specialoffer-response', ['meta' => $meta, 'status' => 'false']);
		} else {
			$sent = $this->Site_Onlineprocess_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('specialoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
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
		$this->load->model('Site_Info_Model');
		$productdata = $this->Site_Info_Model->getproductdetails('bumper-offer');
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
			'offerpage' => 6,
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

		$returnUrl = base_url('pay/bumperreturn');
		$callbackUrl = base_url('pay/bumpercallback');

		if (PHONEPE_MODE == "PROD") {
			$curlurl = 'https://api.phonepe.com/apis/hermes/pg/v1/pay';
		} else {
			$curlurl = 'https://api-preprod.phonepe.com/apis/hermes/pg/v1/pay';
		}

		$phonepedata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'entryfor' => 6,
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
				return redirect("bumperoffer");
				die;
			}
		} else {
			return redirect("bumperoffer");
			die;
		}
	}

	public function bumperreturn()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (!isset($_POST["code"]) || !isset($_POST["transactionId"]) || !isset($_POST["providerReferenceId"])) {
			return redirect("bumperoffer");
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
		$userdata = $this->Site_Onlineprocess_Model->checkbumperofferdata($paymentdata->userid);

		if ($txStatus == "PAYMENT_SUCCESS") {
			$isentry = $this->Site_Onlineprocess_Model->checkbumperofferentry($referenceId);
			if ($isentry == 0) {
				$bumperno = random_code(16);

				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'bumper_number' => $bumperno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'amount' => $paymentdata->orderamount,
					'paymentid' => $referenceId,
					'isActive' => 1
				);

				$response = $this->Site_Onlineprocess_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Onlineprocess_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('bumperoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$this->load->view('bumperoffer-response', ['meta' => $meta, 'status' => 'true']);
			}
		} else if ($txStatus == "PAYMENT_FAILURE") {
			$sent = $this->Site_Onlineprocess_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('bumperoffer-response', ['meta' => $meta, 'status' => 'false']);
		} else {
			$sent = $this->Site_Onlineprocess_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('bumperoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}

	public function bumpercallback()
	{
		die;
	}
	/* STOP : Bumper Offer loan */
}
?>
