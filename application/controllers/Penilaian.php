<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
		
	}

	public function index()
	{
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}
		
		$data['kriteria']=$this->Mcrud->get_all_data('kriteria')->result();
		$data['sub_kriteria']=$this->Mcrud->get_all_data('sub_kriteria')->result();
		$data['alternatif']=$this->Mcrud->get_all_data('alternatif')->result();
		$this->template->load('layout_admin', 'admin/penilaian/',$data);
		
	}
}