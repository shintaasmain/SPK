 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

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
		
		$data['alternatif']=$this->Mcrud->get_detailalternatif()->result();
		$this->template->load('layout_admin', 'admin/alternatif/index',$data);
		
	}

	// TAMPIL FORM TAMBAH ALTERNATIF
    public function tambahAlternatif(){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}

		$this->template->load('layout_admin', 'admin/alternatif/form_tambahalternatif');
    }

	//  SIMPAN ALTERNATIF
	public function simpan_alternatif(){

		$id_admin = $this->session->userdata('id_admin');
		$nama_alternatif = $this->input->post('nama_alternatif');
		$data = array(
			'id_admin' => $id_admin,
			'nama_alternatif' => $nama_alternatif,
		);
		$id_alternatif = $this->Mcrud->insert_alternatif($data);

		$data_detail = array(
			'id_alternatif' => $id_alternatif,
		);

		$id_detail = $this->Mcrud->insert_detail_alternatif($data_detail, 'detail_alternatif');
		redirect('alternatif');
	}

	// TAMBAH KRITERA UNTUK SETIAP ALTERNATIF
    public function tambah($id){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}

		$dataWhere = array('id_alternatif'=>$id);
		$data['alternatif'] = $this->Mcrud->get_by_id('alternatif',$dataWhere)->result();
		$data['kriteria'] = $this->Mcrud->get_all_data('kriteria')->result();

		//var_dump($data);
		$this->template->load('layout_admin', 'admin/alternatif/form_tambah',$data);
    }
    // public function tambahcoba($id){
	// 	if(empty($this->session->userdata('username_admin'))){
	// 		redirect('login');
	// 	}

	// 	$dataWhere = array('id_alternatif'=>$id);
	// 	$data['alternatif'] = $this->Mcrud->get_by_id('alternatif',$dataWhere)->result();
	// 	$data['kriteria'] = $this->Mcrud->get_all_data('kriteria')->result();

	// 	//var_dump($data);
	// 	$this->template->load('layout_admin', 'admin/alternatif/form_tambahcoba',$data);
    // }

	// SIMPAN TAMBAH KRITERIA UNTUK ALTERNATIF
	public function edit_kriteriaalternatif($id){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}
		
		$data['keterangan'] = $this->Mcrud->get_subkriteria()->result();
		$data['detail_alternatif'] = $this->Mcrud->get_editalternatif($id)->row_object();
		
		$this->template->load('layout_admin', 'admin/alternatif/form_editalternatif', $data);

	}

	// SIMPAN EDIT ALTERNATIF
	public function edit_alternatif($id_alternatif)
	{
		$id_alternatif = $this->input->post('id_alternatif');
		$C1 = $this->input->post('C1');
		$C2 = $this->input->post('C2');
		$C3 = $this->input->post('C3');
		$C4 = $this->input->post('C4');
		$C5 = $this->input->post('C5');
		$dataUpdate = array(
			'C1' => $C1,
			'C2' => $C2,
			'C3' => $C3,
			'C4' => $C4,
			'C5' => $C5,
		);
		var_dump($dataUpdate);
		$this->Mcrud->update('detail_alternatif', $dataUpdate, 'id_alternatif',$id_alternatif);
		redirect('alternatif');
	}

	public function hapus($id)
	{
		$cek = $this->Mcrud->cek_alternatif($id)->result();

		if(count($cek)==0) {
			$where = array('id_alternatif' => $id);
			$this->Mcrud->delete($where,'detail_alternatif');
			$this->Mcrud->delete($where,'alternatif');
			redirect('alternatif');

		} else if (count($cek)>=1) {
			$this->session->set_flashdata('error', 'Data Alternatif sedang digunakan pada Peniliaian !');
			redirect('alternatif');
		}
		
	}
	
}
