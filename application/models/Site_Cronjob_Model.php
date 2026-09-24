<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Site_Cronjob_Model extends CI_Model
{
	/* START : Online loan customer marketing message */
	public function online_marketing_message($schedule_arr)
	{
		$dynamicDate = getLockDateByDays();
		$url = $smsmessage = $dataset = $smsresponse = '';
		$offerflag = 0;

		$wheredate = "CAST(r.update_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule_arr . " DAY) ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->join('user_tree t', 't.subuserid=r.id', 'left')
			->where($wheredate)
			->where('r.rec_date >=', '2025-10-10 00:00:00')
			//->where('r.rec_date >=', $dynamicDate)
			->where('r.isDnd', 0)
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('a.status', 1)
			->where('a.isDelete', 0)
			->where('t.subuserid', NULL)
			->order_by('r.id asc')
			->get()
			->result();

		if (count($userlist) > 0) {
			$this->load->model('Site_Info_Model');
			$smsmessage = $this->Site_Info_Model->getsmsmessage('pl-remarketing-sms');
			$smssendid = getSMSsenderid();

			foreach ($userlist as $row) {
				if ($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if ($row->loanamount != 0 && $row->income != 0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}
					$premessage = str_replace("<#cronamount>", $eligibilityamt, $smsmessage);

					$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>" . $row->mobile . "</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";
				}
			}

			$eligibilityamt = "5,00,000";
			$premessage = str_replace("<#cronamount>", $eligibilityamt, $smsmessage);

			$dataset .= "<sms><user>".SMS_OBB_USERNAME."</user><password>".SMS_OBB_API_KEY."</password><mobiles>7486046591</mobiles><message>".$premessage."</message><accusage>1</accusage><senderid>".$smssendid."</senderid></sms>";

			$dataset .= "<sms><user>".SMS_OBB_USERNAME."</user><password>".SMS_OBB_API_KEY."</password><mobiles>9723682913</mobiles><message>".$premessage."</message><accusage>1</accusage><senderid>".$smssendid."</senderid></sms>";

			$dataset .= "<sms><user>".SMS_OBB_USERNAME."</user><password>".SMS_OBB_API_KEY."</password><mobiles>7984310891</mobiles><message>".$premessage."</message><accusage>1</accusage><senderid>".$smssendid."</senderid></sms>";

			$dataset .= "<sms><user>".SMS_OBB_USERNAME."</user><password>".SMS_OBB_API_KEY."</password><mobiles>9909028478</mobiles><message>".$premessage."</message><accusage>1</accusage><senderid>".$smssendid."</senderid></sms>";
			

			$smsresponse = sendxmlSMSobb($dataset);

			$data1 = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'crontype' => 'Customer',
				'parentid' => 1,
				'cronname' => 'SMS Day - ' . $schedule_arr,
				'msgcount' => count($userlist),
				'msgresponse' => $smsresponse
			);

			$this->db->insert('sms_log', $data1);
		}

		return true;
	}
	/* END : Online loan customer marketing message */


	/* START : Whatsapp marketing message */
	public function whatsapp_marketing_message($schedule_arr)
	{
		$url = $smsmessage = $dataset = $smsresponse = '';
		$cnt = 1;

		$this->load->model('Site_Info_Model');
		$wpcampaignname = $this->Site_Info_Model->getsmsmessage('wpcampaignmain');
		
		$offerflag = 0;

		$wheredate = "CAST(r.update_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule_arr . " DAY) ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->join('user_tree t', 't.subuserid=r.id', 'left')
			->where($wheredate)
			->where('r.rec_date >=', '2025-10-10 00:00:00')
			->where('r.isDnd', 0)
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('a.status', 1)
			->where('a.isDelete', 0)
			->where('t.subuserid', NULL)
			->order_by('r.id asc')
			->get()
			->result();

		if (count($userlist) > 0) {
			foreach($userlist as $row) {
				if($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if($row->loanamount!=0 && $row->income!=0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}

					$data1 = array(
						'apiKey' => AISENSY_KEY,
						'campaignName' => $wpcampaignname,
						'destination' => '+91' . $row->mobile,
						'media' => array(
							'url' => 'https://d3jt6ku4g6z5l8.cloudfront.net/IMAGE/65462cc9f1ee250bcc4fad93/3564877_rc.jpg',
							'filename' => 'rc.jpg'
						),
						'userName' => $row->fullname,
						'templateParams' => array('$Name','$EligibleAmount'),
						'tags' => array('Get Offer'),
						'attributes' => array(
							'EligibleAmount' => strval($eligibilityamt)
						)
					);
					$restrack1 = aisensy_track($data1);
					$airesponse .= $row->mobile . "-" . $restrack1 . "|";
					$cnt++;
				}
			}

			$adminlist = ['7486046591', '9723682913', '7984310891','9909028478'];
			$eligibilityamt = "5,00,000";

			foreach($adminlist as $row2) {
				$data2 = array(
					'apiKey' => AISENSY_KEY,
					'campaignName' => $wpcampaignname,
					'destination' => '+91' . $row2,
					'media' => array(
						'url' => 'https://d3jt6ku4g6z5l8.cloudfront.net/IMAGE/65462cc9f1ee250bcc4fad93/3564877_rc.jpg',
							'filename' => 'rc.jpg'
					),
					'userName' => '$Name',
					'templateParams' => array('$Name','$EligibleAmount'),
					'tags' => array('Get Offer'),
					'attributes' => array(
						'EligibleAmount' => strval($eligibilityamt)
					)
				);
				$restrack2 = aisensy_track($data2);
				$airesponse .= $row2 . "-" . $restrack2 . "|";
				$cnt++;
			}


			$data1 = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'crontype' => 'Whatsapp Digital',
				'parentid' => 11,
				'cronname' => 'Whatsapp - ' . $schedule_arr,
				'msgcount' => $cnt,
				'msgresponse' => $airesponse
			);

			$this->db->insert('sms_log', $data1);
		}

		return true;
	}
	/* END : Whatsapp marketing message */

	/* START : Customer support message */
	public function customer_support_message()
	{

		$url = $smsmessage = $dataset = $smsresponse = '';

		$prev_date = date('Y-m-d', strtotime('-1 days'));
		$userlist = $this->db->select('id, update_date, fullname, mobile, email, cardtype')
			->where('update_date >=', $prev_date . ' 21:00:00')
			->where('isUser', 2)
			->where('isActive', 1)
			->where('isDelete', 0)
			->order_by('id asc')
			->get('user_registration')
			->result();

		if (count($userlist) > 0) {
			$smsmessage = "Dear Customer, your loan application is under process. Our Company Executive will connect soon. If you've any query, call us on {#mobileno} Regards, Kreditway";
			$smssendid = getSMSsenderid();

			foreach ($userlist as $row) {
				if ($row->mobile != '') {
					$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>" . $row->mobile . "</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";
				}
			}

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>7486046591</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>9723682913</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>7984310891</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>9909028478</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			
			$smsresponse = sendxmlSMSobb($dataset);

			$data1 = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'crontype' => 'Support',
				'parentid' => 3,
				'cronname' => 'Customer Support',
				'msgcount' => count($userlist),
				'msgresponse' => $smsresponse
			);

			$this->db->insert('sms_log', $data1);
		}


		return true;
	}
	/* END : Customer support message */

	/* START : Customer reapply eligible message */
	public function customer_reapplyeligible()
	{

		$wheredate = "CAST(a.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -90 DAY)";
		$wherestatus = "(a.status=2 or a.status=3)";

		$userlist = $this->db->select('r.id, a.rec_date, r.mobile, r.email')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
			->where($wherestatus)
			->where('r.isUser', 2)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('a.isDelete', 0)
			->group_by('r.mobile')
			->order_by('r.rec_date desc')
			->get()
			->result();

		if (count($userlist) > 0) {
			foreach ($userlist as $row) {				
				$message = "The wait is over! You're now eligible to reapply for a loan. Login to your portal https://bitly.cx/MRyI Kreditway
				$smsresponse = sendtextSMSobb($row->mobile, $message);
			}
		}

	}
	/* END : Customer reapply eligible message */

	/* START : Whatsapp INTERAKT marketing message  interakt*/ 

	public function whatsapp_interakt_marketing_message($schedule) {

		$airesponse = "";
		$cnt = 1;
		
		$this->load->model('Site_Info_Model');
		$intekt_rm_offer_name = $this->Site_Info_Model->getsmsmessage('intekt_rm_offer_name');

		$wheredate = "CAST(r.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule . " DAY) ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
			->where('r.rec_date >=', '2025-10-10 00:00:00')
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('r.cardtype', 11)
			->where('a.status', 1)
			->where('a.isDelete', 0)
		//	->group_by('r.mobile')
			->order_by('r.id asc')
			->get()
		    ->result();
			
		if(count($userlist) > 0) {
			foreach($userlist as $row) {
				if($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if($row->loanamount!=0 && $row->income!=0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}

					 // Whatsapp INTERAKT Code
						$data4 = array(
							"fullPhoneNumber" => '+91'.$row->mobile,
							"callbackData"=> "some text here",
							"type"=> "Template",
							"template"=> array(
									"name"=> $intekt_rm_offer_name,
									"languageCode"=> "en",
									"headerValues"=> array(
										"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/e738c92e-2bf1-4f82-9fd5-ccf4ebc221bf/message_template_media/3vV9E33p1zPq/rc_rm_7nov.jpeg?se=2030-11-01T05%3A26%3A52Z&sp=rt&sv=2019-12-12&sr=b&sig=Shk1D%2BUEH3B7nDhqhUjpxXl5Xp2J8nnnCHnoPetDRew%3D"
									),
									"bodyValues"=> array(
										$row->fullname, $eligibilityamt
									),
								)
						
						);
						$restrack4 = interakt_track($data4);
						$airesponse .= $row->mobile . "-" . $restrack4 . "|";
					$cnt++;
				}
			}

			$adminlist = ['7486046591', '9723682913', '7984310891','9909028478'];
			$eligibilityamt = "5,00,000";

			foreach($adminlist as $row2) {
				$data4 = array(
					"fullPhoneNumber" => '+91'.$row2,
					"callbackData"=> "some text here",
					"type"=> "Template",
					"template"=> array(
							"name"=> $intekt_rm_offer_name,
							"languageCode"=> "en",
							"headerValues"=> array(
								"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/e738c92e-2bf1-4f82-9fd5-ccf4ebc221bf/message_template_media/3vV9E33p1zPq/rc_rm_7nov.jpeg?se=2030-11-01T05%3A26%3A52Z&sp=rt&sv=2019-12-12&sr=b&sig=Shk1D%2BUEH3B7nDhqhUjpxXl5Xp2J8nnnCHnoPetDRew%3D"
							),
							"bodyValues"=> array(
								'$name', $eligibilityamt
							),
						)
				
				);
				$restrack5 = interakt_track($data4);
				$airesponse .= $row2 . "-" . $restrack5 . "|";
				$cnt++;
			}
			
			$data1 = array(
			 'rec_date' => date('Y-m-d H:i:s'),
			 'crontype' => 'whatsapp interakt',
			 'parentid' => 2,
			 'cronname' => 'whatsapp interakt - ' . $schedule,
			 'msgcount' => $cnt,
			 'msgresponse' => $airesponse
			);

			$this->db->insert('sms_log', $data1);
		}

		return true;

	}


	/* END : Whatsapp INTERAKT marketing message */

	/* START : Whatsapp INTERAKT marketing message  interakt*/ 

	public function whatsapp_interakt_marketing_message_new($schedule) {

		$airesponse = "";
		$cnt = 1;
		
		$this->load->model('Site_Info_Model');
		
		$wheredate = "CAST(r.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule . " DAY) ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
			->where('r.rec_date >=', '2025-10-10 00:00:00')
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('r.cardtype', 11)
			->where('a.status', 1)
			->where('a.isDelete', 0)
		//	->group_by('r.mobile')
			->order_by('r.id asc')
			->get()
		    ->result();
			
		if(count($userlist) > 0) {
			foreach($userlist as $row) {
				if($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if($row->loanamount!=0 && $row->income!=0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}

					 // Whatsapp INTERAKT Code
						$data4 = array(
							"fullPhoneNumber" => '+91'.$row->mobile,
							"callbackData"=> "some text here",
							"type"=> "Template",
							"template"=> array(
									"name"=> 'rm_20jan_1',
									"languageCode"=> "en",
									"headerValues"=> array(
										"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/9d2a9eb0-8e71-4c41-a62c-237b4aa38601/message_template_media/L48TGtsIWmS5/kreditway_rm_20jan.jpeg?se=2031-01-14T06%3A27%3A06Z&sp=rt&sv=2019-12-12&sr=b&sig=GRBa4NcpD/53R7UXA0JeN8KJjk%2BJOsjccjCXJdCDlEA%3D"
									),
									"bodyValues"=> array(
										$row->fullname, $eligibilityamt
									),
								)
						
						);
						$restrack4 = interakt_track_new($data4);
						$airesponse .= $row->mobile . "-" . $restrack4 . "|";
					$cnt++;
				}
			}

			$adminlist = ['7486046591', '9723682913', '7984310891','9909028478'];
			$eligibilityamt = "5,00,000";

			foreach($adminlist as $row2) {
				$data4 = array(
					"fullPhoneNumber" => '+91'.$row2,
					"callbackData"=> "some text here",
					"type"=> "Template",
					"template"=> array(
							"name"=> 'rm_20jan_1',
							"languageCode"=> "en",
							"headerValues"=> array(
								"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/9d2a9eb0-8e71-4c41-a62c-237b4aa38601/message_template_media/L48TGtsIWmS5/kreditwaym_20jan.jpeg?se=2031-01-14T06%3A27%3A06Z&sp=rt&sv=2019-12-12&sr=b&sig=GRBa4NcpD/53R7UXA0JeN8KJjk%2BJOsjccjCXJdCDlEA%3D"
							),
							"bodyValues"=> array(
								'$name', $eligibilityamt
							),
						)
				
				);
				$restrack5 = interakt_track_new($data4);
				$airesponse .= $row2 . "-" . $restrack5 . "|";
				$cnt++;
			}
			
			$data1 = array(
			 'rec_date' => date('Y-m-d H:i:s'),
			 'crontype' => 'whatsapp new interakt',
			 'parentid' => 3,
			 'cronname' => 'whatsapp new interakt - ' . $schedule,
			 'msgcount' => $cnt,
			 'msgresponse' => $airesponse
			);

			$this->db->insert('sms_log', $data1);
		}

		return true;

	}


	/* END : Whatsapp INTERAKT marketing message */

	/* START : Digital RCS customer marketing message */
	public function customer_leads_marketing_RCS($schedule = 9999)
	{
		$airesponse = "";
		$cnt = 1;
		
		$this->load->model('Site_Info_Model');
		
		$wheredate = "CAST(r.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule . " DAY) ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
			->where('r.rec_date >=', '2025-10-10 00:00:00')
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('r.cardtype', 11)
			->where('a.status', 1)
			->where('a.isDelete', 0)
		//	->group_by('r.mobile')
			->order_by('r.id asc')
			->get()
		    ->result();

		if (count($userlist) > 0) {
			$this->load->model('Site_Info_Model');
			foreach ($userlist as $row) {
				if ($row->mobile != '') {
					$mobiledata[] = '91'.$row->mobile;
				}
			}

			$mobiledata[] = '917984310891';
        	$mobiledata[] = '917201825971';
			$mobiledata[] = '919898339014';
			$mobiledata[] = '919913170623';

			$this->load->helper('rcs');
       		$response = sendRCSmessage($mobiledata);

			$data1 = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'crontype' => 'customer RCS',
				'parentid' => 15,
				'cronname' => 'RCS - ' . $schedule,
				'msgcount' => count($userlist),
				'msgresponse' => $response
			);

			$this->db->insert('sms_log', $data1);
		}

		return true;
	}
	/* END : Digital loan customer marketing message */



}

?>
