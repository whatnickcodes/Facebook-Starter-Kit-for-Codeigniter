<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Chupacabra extends CI_Controller {

	function index() {
		$this->load->model('fizzlebizzle');
		$result = $this->fizzlebizzle->get_user();
		
		if ($result['is_true']) {
			$this->session->set_userdata(array('facebook_uid' => $result['facebook_uid'], 'is_logged_in' => TRUE));
			redirect('secure', 'refresh');
		} else {
			$data['page'] = 'home_view';
			$this->load->view('template', $data);
		}
	}
	
	function logout() {
		$this->auth->logout();
	}
}