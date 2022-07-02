<?php
class Login extends CI_Controller {

	public function aksi_login()
	{
		
		$this->load->model('Mlogin');
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->Mlogin->cek_login($u, $p);
		if($cek->num_rows()>0){
			$row = $cek->row_array();
			$data_session = array(
				'username' => $u,
				'nama_admin'=>$row['nama_admin'],
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect('admin/dashboard');
		}else{
			redirect('admin');
		}
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
}
