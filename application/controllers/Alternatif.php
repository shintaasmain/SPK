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
		
		//$data['kriteria']=$this->Mcrud->get_all_data('kriteria')->result();
		$data['alternatif']=$this->Mcrud->get_all_data('alternatif')->result();
		//$data['detail_alternatif']=$this->Mcrud->get_detailalternatifbismillah()->result();
		//$data['nama_alternatif']=$this->Mcrud->nama_alternatif()->result();
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

		$nama_alternatif = $this->input->post('nama_alternatif');
		$data = array(
			'nama_alternatif' => $nama_alternatif,
		);
		$this->Mcrud->insert('alternatif', $data);
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
    public function tambahcoba($id){
		if(empty($this->session->userdata('username_admin'))){
			redirect('login');
		}

		$dataWhere = array('id_alternatif'=>$id);
		$data['alternatif'] = $this->Mcrud->get_by_id('alternatif',$dataWhere)->result();
		$data['kriteria'] = $this->Mcrud->get_all_data('kriteria')->result();

		//var_dump($data);
		$this->template->load('layout_admin', 'admin/alternatif/form_tambahcoba',$data);
    }

	// SIMPAN TAMBAH KRITERIA UNTUK ALTERNATIF
		public function simpan_detailAlternatif(){
		
		$id_alternatif = $this->input->post('id_alternatif');
		$C1 = $this->input->post('c1');
		$C2 = $this->input->post('c2');
		$C3 = $this->input->post('c3');
		$C4 = $this->input->post('c4');
		$C5 = $this->input->post('c5');
		$data = array(
			'id_alternatif' => $id_alternatif,
			'C1' => $C1,
			'C2' => $C2,
			'C3' => $C3,
			'C4' => $C4,
			'C5' => $C5,
		);
		$this->Mcrud->insert('detail_alternatif', $data);
		redirect('alternatif');
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
		$kodekriteria = $this->input->post('kode_kriteria');
		$kriteria = $this->input->post('nama_kriteria');
		$bobot = $this->input->post('bobot');
		$jenis = $this->input->post('jenis');
		$data = array(
			'kode_kriteria' => $kodekriteria,
			'nama_kriteria' => $kriteria,
			'bobot' => $bobot,
			'jenis' => $jenis,
		);
		$this->Mcrud->insert('kriteria', $data);
		redirect('kriteria');
		}	
	}

	public function getalternatif($id){
		$dataWhere = array('id_alternatif'=>$id);
		$data['alternatif'] = $this->Mcrud->getdata_alternatif($id)->result();
		$this->template->load('layout_admin', 'admin/alternatif/tampil_alternatif', $data);

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


	public function kriteria()
	{
		$id = $this->input->post('id');
		$data = $this->Mcrud->get_sub($id);
		//var_dump($data);
		$this->output->set_content_type('application/json')->set_output( json_encode($data));
	}



	public function hapus($id)
	{
		$where = array('id_alternatif' => $id);
		$this->Mcrud->delete($where,'alternatif');
		redirect('alternatif');
	}

	public function hapus_subkriteria($idsubkriteria, $idkriteria)
	{
		$where = array('id_subkriteria' => $idkriteria);
		$this->Mcrud->delete($where,'subkriteria');
		redirect('kriteria/getsubkriteria/'.$idkriteria);
	}

	public function get_sub_kriteria()
	{
		$id_kriteria = $this->input->post('id', TRUE);
		$data = $this->Mcrud->get_sub($id_kriteria)->result();
		//var_dump($this->Mcrud);
		echo json_encode($data);
	}
	
}
