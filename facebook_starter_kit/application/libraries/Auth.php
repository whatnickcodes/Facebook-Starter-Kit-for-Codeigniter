<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Auth {

	protected $CI;
	
	function __construct () {
		$this->CI =& get_instance();
	}
	
	function is_logged_in() {
		$is_logged_in = $this->CI->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in != TRUE ) {
			$this->CI->session->set_flashdata('message', '<div class="error_message">Try logging in first.</div>');
			redirect(base_url(), 'location');
		}
	}
	
	function logout() { 
		$this->CI->session->sess_destroy();
		$this->CI->facebook->destroySession();
		session_destroy();
		
		$this->CI->load->model('fizzlebizzle');
		$result = $this->CI->fizzlebizzle->get_logout_url();
		
		if ($result['is_true']) {
			redirect($result['logout_url'], 'location');
		} else {
			redirect(base_url(), 'location');
		}
	}
}