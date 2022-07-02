<?php
class Login extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('id_admin')) {
         redirect('admin');
      } else {
			$data['title'] = 'Login Akun Pengguna';
			$this->load->view('login/form_login', $data);
		}
	}

	public function aksi_login()
	{
		
		$this->load->model('Mlogin');
      $u = $this->input->post('username_admin');
      $p = $this->input->post('pass_admin');

      $cek = $this->Mlogin->cek_login($u);

      if($cek){
         if (password_verify($p, $cek['pass_admin'])){
            $data = [
               'id_admin' => $cek['id_admin'],
               'username_admin' => $cek['username_admin'],
               'status' => 'login'
            ];
            $this->session->set_userdata($data);
            redirect('admin');
         } else {
            $this->session->set_flashdata('error', 'Password salah!');
            redirect('login');
         }
      } else {
         if($u){
            $this->session->set_flashdata('error', 'Akun tidak terdaftar!');
         }
         redirect('login');
      }
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
}
