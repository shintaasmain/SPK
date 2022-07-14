<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
		
	}

	public function index(){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}

		$data['jml_kriteria'] = $this->Mcrud->totalKriteria()->result();
		$data['jml_alternatif'] = $this->Mcrud->totalAlternatif()->result();
		
		$this->template->load('layout_admin','admin/dashboard', $data);
	}
	
}
