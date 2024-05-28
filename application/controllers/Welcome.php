<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		echo CI_VERSION;
		echo md5("rerrere");
		custom_log_message('error', 'This is an error message.');
		// Log a debug message
        custom_log_message('debug', 'This is a debug message.');

        // Log an informational message
        custom_log_message('info', 'This is an informational message.');
		custom_log_message('info', 'This is an informational message.');
		
		custom_log_message('info', 'Controller :- ' . $this->router->fetch_class() . ', Method :- ' . $this->router->fetch_method());
		$this->load->library('session');
		$this->session->set_userdata('user_id', 123);
		$this->session->set_userdata('username', 'john_doe');
		$this->session->set_userdata('logged_in', true);
		if (is_logged_in()) {
			// User is logged in
			echo 'logged in';
		} else {
			// User is not logged in
			echo 'not logged in';
		}
		
		if (check_role('admin')) {
			// User has admin role
		} else {
			// User does not have admin role
		}
		echo $ip = $_SERVER['REMOTE_ADDR'];
		// $ip_address = $this->input->ip_address1();
		// return $ip_address;
		echo $this->input->ip_address();
	}
}
