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
		$data['kriteriaC1']=$this->Mcrud->getwhereC1()->result();
		$data['max1']=$this->Mcrud->getmaxC1()->result();
		$data['min1']=$this->Mcrud->getminC1()->result();
		$data['kriteriaC2']=$this->Mcrud->getwhereC2()->result();
		$data['max2']=$this->Mcrud->getmaxC2()->result();
		$data['min2']=$this->Mcrud->getminC2()->result();
		$data['kriteriaC3']=$this->Mcrud->getwhereC3()->result();
		$data['max3']=$this->Mcrud->getmaxC3()->result();
		$data['min3']=$this->Mcrud->getminC3()->result();
		$data['kriteriaC4']=$this->Mcrud->getwhereC4()->result();
		$data['max4']=$this->Mcrud->getmaxC4()->result();
		$data['min4']=$this->Mcrud->getminC4()->result();
		$data['kriteriaC5']=$this->Mcrud->getwhereC5()->result();
		$data['max5']=$this->Mcrud->getmaxC5()->result();
		$data['min5']=$this->Mcrud->getminC5()->result();


		$data['bobotC1']=$this->Mcrud->getBobotC1()->result();
		$data['bobotC2']=$this->Mcrud->getBobotC2()->result();
		$data['bobotC3']=$this->Mcrud->getBobotC3()->result();
		$data['bobotC4']=$this->Mcrud->getBobotC4()->result();
		$data['bobotC5']=$this->Mcrud->getBobotC5()->result();

		
		$data['alternatif']=$this->Mcrud->get_detailalternatif()->result();
		$this->template->load('layout_admin', 'admin/penilaian/index',$data);
		
	}

	public function index1()
	{
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}
		
		$data['kriteria']=$this->Mcrud->get_all_data('kriteria')->result();
		$data['sub_kriteria']=$this->Mcrud->get_all_data('subkriteria')->result();
		$data['alternatif']=$this->Mcrud->get_all_data('alternatif')->result();
		$this->template->load('layout_admin', 'admin/penilaian/',$data);
		
	}
}