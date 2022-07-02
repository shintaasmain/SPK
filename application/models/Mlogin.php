<?php

class Mlogin extends CI_Model{
    
    public function cek_login($u){
        return $this->db->get_where('admin', ['username_admin' => $u])->row_array();
    }
    
    public function insert_akun($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}

}

?>