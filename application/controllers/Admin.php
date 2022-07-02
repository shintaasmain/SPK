<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}
		
		$this->template->load('layout_admin','admin/dashboard');
	}
	
}
