<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		$this->load->view('login/form_login');
	}
	
	public function dashboard()
	{
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		
		$this->template->load('layout_admin','admin/dashboard');
	}

}
