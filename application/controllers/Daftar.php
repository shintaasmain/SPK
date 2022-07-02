<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
   
   function __construct()
   {
      parent::__construct();
      $this->load->model('Mlogin');
   }

	public function index()
	{
      $data['title'] = 'Daftar Akun Pengguna';
      $this->load->view('daftar/form_daftar', $data);
			}

   public function aksi_daftar(){       
		$username = $this->input->post('username_admin');
      $cek = $this->Mlogin->cek_login($username);
      
      if ($cek) {
         $this->session->set_flashdata('error', '<b>Username</b> ini sudah terdaftar!');
         redirect('daftar');
      } else {
         $data = [
            'nama_admin' => htmlspecialchars($this->input->post('nama_admin', true)),
            'username_admin' => htmlspecialchars($this->input->post('username_admin', true)),
            'pass_admin' => password_hash($this->input->post('pass_admin'), PASSWORD_DEFAULT),
            
         ];
         
         $this->Mlogin->insert_akun('admin', $data);
         $this->session->set_flashdata('success', '<b>Berhasil</b>. Akun Anda telah terdaftar');
         redirect('daftar');
      }
	}
}
