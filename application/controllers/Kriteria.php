 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

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
		$this->template->load('layout_admin', 'admin/kriteria/index',$data);
		
	}

	
    public function tambah(){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}
		$data['kriteria'] = $this->Mcrud->get_all_data('kriteria')->result();
		//var_dump($data);
		$this->template->load('layout_admin', 'admin/kriteria/form_tambah',$data);
    }

	public function simpan(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kode_kriteria','kode_kriteria','required',
		array('required'=>'Kode kriteria tidak boleh kosong!')
		);
		$this->form_validation->set_rules('nama_kriteria','nama_kriteria','required',
		array('required'=>'Nama kriteria tidak boleh kosong!')
		);
		$this->form_validation->set_rules('bobot','bobot','required',
		array('required'=>'Bobot tidak boleh kosong!')
		);
		if ($this->form_validation->run() == FALSE)
		{
			$data['kriteria'] = $this->Mcrud->get_all_data('kriteria')->result();
		//var_dump($data);
		$this->template->load('layout_admin', 'admin/kriteria/form_tambah',$data);
 		}
		else
		{
			$id_admin = $this->session->userdata('id_admin');
			$kodekriteria = $this->input->post('kode_kriteria');
			$kriteria = $this->input->post('nama_kriteria');
			$bobot = $this->input->post('bobot');
			$jenis = $this->input->post('jenis');
			$data = array(
			'id_admin' => $id_admin,
			'kode_kriteria' => $kodekriteria,
			'nama_kriteria' => $kriteria,
			'bobot' => $bobot,
			'jenis' => $jenis,
		);
		$this->Mcrud->insert('kriteria', $data);
		redirect('kriteria');
		}	
	}

	public function getid($id){
		$dataWhere = array('id_kriteria'=>$id);
		$data['kriteria'] = $this->Mcrud->get_by_id('kriteria', $dataWhere)->row_object();
	
		$this->template->load('layout_admin', 'admin/kriteria/form_edit', $data);

	}

	public function edit()
	{
		$id_kriteria = $this->input->post('id_kriteria');
		$kode_kriteria = $this->input->post('kode_kriteria');
		$nama_kriteria = $this->input->post('nama_kriteria');
		$bobot = $this->input->post('bobot');
		$jenis = $this->input->post('jenis');
		$dataUpdate = array(
			'kode_kriteria' => $kode_kriteria,
			'nama_kriteria' => $nama_kriteria,
			'bobot' => $bobot,
			'jenis' => $jenis,
		);
		$this->Mcrud->update('kriteria', $dataUpdate, 'id_kriteria',$id_kriteria);
		redirect('kriteria');
	}

	// SUB KRITERIA

	public function getsubkriteria($id){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}
		$dataWhere = array('id_kriteria'=>$id);
		$data['kriteria'] = $this->Mcrud->get_by_id('kriteria', $dataWhere)->row_object();
		$data['subkriteria'] = $this->Mcrud->get_by_id('subkriteria',$dataWhere)->result();
		
		$this->template->load('layout_admin', 'admin/kriteria/subkriteria', $data);

	}

	public function tambah_subkriteria($id){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}
		$dataWhere = array('id_kriteria'=>$id);
		$data['kriteria'] = $this->Mcrud->get_by_id('kriteria', $dataWhere)->row_object();
		//var_dump($data);
		$this->template->load('layout_admin', 'admin/kriteria/form_tambahsubkriteria',$data);
    }

	

	public function simpan_subkriteria(){

		$id_kriteria = $this->input->post('id_kriteria');
		$nama_subkriteria = $this->input->post('nama_subkriteria');
		$bobot = $this->input->post('bobot');
		$data = array(
			'id_kriteria' => $id_kriteria,
			'nama_subkriteria' => $nama_subkriteria,
			'bobot' => $bobot,
		);
		$this->Mcrud->insert('subkriteria', $data);
		redirect('kriteria/getsubkriteria/'.$id_kriteria);
	}

	public function getidsubkriteria($id){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}
		$dataWhere = array('id_subkriteria'=>$id);
		//$data['kriteria'] = $this->Mcrud->get_all_data('kriteria')->row_object();
		$data['subkriteria'] = $this->Mcrud->get_by_id('subkriteria',$dataWhere)->row_object();
		
		$this->template->load('layout_admin', 'admin/kriteria/form_editsubkriteria', $data);

	}

	public function edit_subkriteria($id_kriteria)
	{
		$id_subkriteria = $this->input->post('id_subkriteria');
		$nama_subkriteria = $this->input->post('nama_subkriteria');
		$bobot = $this->input->post('bobot');
		$dataUpdate = array(
			'nama_subkriteria' => $nama_subkriteria,
			'bobot' => $bobot,
		);
		$this->Mcrud->update('subkriteria', $dataUpdate, 'id_subkriteria',$id_subkriteria);
		redirect('kriteria/getsubkriteria/'.$id_kriteria);
	}



	public function hapus($id)
	{
		$where = array('id_kriteria' => $id);
		$this->Mcrud->delete($where,'kriteria');
		redirect('kriteria');
	}

	public function hapus_subkriteria($idsubkriteria, $idkriteria)
	{
		$where = array('id_subkriteria' => $idkriteria);
		$this->Mcrud->delete($where,'subkriteria');
		redirect('kriteria/getsubkriteria/'.$idkriteria);
	}
	
}
