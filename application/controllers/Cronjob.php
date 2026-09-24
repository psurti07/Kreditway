<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cronjob extends CI_Controller
{

	public function index()
	{
		return redirect()->to('Infopage');
	}

	/* Online loan customer marketing message */
	public function onlineremarketing()
	{
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();
		$cronjobs['a0'] = '15 10 * * *';
		$cronjobs['b0'] = '0 12 * * *';
		$cronjobs['c0'] = '45 20 * * *';
		
		$cronjobs['a1'] = '0 14 * * *';
		$cronjobs['b1'] = '30 20 * * *';
		
		$cronjobs['a2'] = '30 13 * * *';
		$cronjobs['b2'] = '0 15 * * *';
		$cronjobs['c2'] = '0 20 * * *';

		$cronjobs['a3'] = '30 11 * * *';
		$cronjobs['b3'] = '0 16 * * *';

		$cronjobs['a6'] = '0 18 * * *';

		$cronjobs['a10'] = '30 14 * * *';
		$cronjobs['b10'] = '0 17 * * *';
		
		foreach ($cronjobs as $method => $cron) {

			$time = time();

			if (is_time_cron($time, $cron)) {

				$schedule = substr($method, 1);
				$response = $this->Site_Cronjob_Model->online_marketing_message($schedule);
			}
		}
		die;
	}
	/* Online loan customer marketing message */

	/* Whatsapp marketing message */
	public function whatsappremarketing()
	{
		die;
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();

		$cronjobs['a0'] = '0 22 * * *';

		$cronjobs['a1'] = '30 9 * * *';
		$cronjobs['b1'] = '30 22 * * *';

		$cronjobs['a2'] = '0 9 * * *';
		$cronjobs['b2'] = '0 23 * * *';
		
		$cronjobs['a5'] = '0 11 * * *';
		$cronjobs['b5'] = '0 21 * * *';
		
		$cronjobs['a9'] = '0 10 * * *';
		$cronjobs['b9'] = '0 16 * * *';

		foreach ($cronjobs as $method => $cron) {

			$time = time();

			if (is_time_cron($time, $cron)) {

				$schedule = substr($method, 1);
				$response = $this->Site_Cronjob_Model->whatsapp_marketing_message($schedule);
			}
		}
		die;
	}
	/* Whatsapp marketing message */

	/* Whatsapp marketing interakt message */
	public function whatsappremarketing_interakt()
	{
		
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();

		$cronjobs['a0'] = '0 22 * * *';

		$cronjobs['a1'] = '30 9 * * *';
		$cronjobs['b1'] = '30 22 * * *';

		$cronjobs['a2'] = '0 9 * * *';
		$cronjobs['b2'] = '0 23 * * *';
				
		$cronjobs['a5'] = '0 11 * * *';
		$cronjobs['b5'] = '0 21 * * *';
		
		$cronjobs['a9'] = '0 10 * * *';
		$cronjobs['b9'] = '0 16 * * *';

		$cronjobs['a15'] = '0 12 * * *';
		$cronjobs['b15'] = '30 21 * * *';

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$response = $this->Site_Cronjob_Model->whatsapp_interakt_marketing_message($schedule);
			}
		}
		die;
	}
	/* Whatsapp marketing interakt message */

	/* Whatsapp marketing interakt message */
	public function whatsappremarketing_interakt_new()
	{
		
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();
		
		$cronjobs['a0'] = '0 22 * * *';

		$cronjobs['a1'] = '30 9 * * *';
		$cronjobs['b1'] = '30 22 * * *';

		$cronjobs['a2'] = '0 9 * * *';
		$cronjobs['b2'] = '0 23 * * *';
				
		$cronjobs['a5'] = '0 11 * * *';
		$cronjobs['b5'] = '0 21 * * *';
		
		$cronjobs['a9'] = '0 10 * * *';
		$cronjobs['b9'] = '0 16 * * *';

		$cronjobs['a15'] = '0 12 * * *';
		$cronjobs['b15'] = '30 21 * * *';

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$response = $this->Site_Cronjob_Model->whatsapp_interakt_marketing_message_new($schedule);
			}
		}
		die;
	}
	/* Whatsapp marketing interakt message */

	/* Customer support message */
	public function customersupportmsg()
	{
		$this->load->model('Site_Cronjob_Model');
		$schedule = '9999';

		$cronjobs = array();
		$cronjobs[] = "0 10 * * *";
		$cronjobs[] = "0 14 * * *";
		$cronjobs[] = "0 18 * * *";

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$response = $this->Site_Cronjob_Model->customer_support_message();
			}
		}

		die;
	}
	/* Customer support message */

	/* Customer reapply eligible message */
	public function customerreapply()
	{
		$this->load->model('Site_Cronjob_Model');
		$response = $this->Site_Cronjob_Model->customer_reapplyeligible();
		die;
	}
	/* Customer reapply eligible message */


	/* Digital personal loan customer marketing message */
	public function custremarketing_RCS()
	{
		die;
		$this->load->model('Site_Cronjob_Model');

		$cronjobs = array();
		$cronjobs['a7'] = '30 8 * * *';

		$cronjobs['a10'] = '0 9 * * *';

		$cronjobs['a20'] = '30 9 * * *';

		$cronjobs['a30'] = '0 13 * * *';

		$cronjobs['a35'] = '30 14 * * *';

		$cronjobs['a38'] = '0 17 * * *';

		$cronjobs['a40'] = '0 19 * * *';
		
		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$response = $this->Site_Cronjob_Model->customer_leads_marketing_RCS($schedule);
			}
		}

		die;
	}
	/* Digital personal loan customer marketing message */

}
?>
