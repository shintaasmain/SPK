<?php

class Mcrud extends CI_Model{
    
    public function get_all_data($tabel){
        $where = $this->session->userdata('id_admin');
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->where('id_admin', $where);
        $q=$this->db->get();
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel, $id);
    }

    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
		$this->db->delete($table);
    }

    public function getdata_alternatif($id)
	{
      $this->db->select('*');
      $this->db->from('alternatif');
      $this->db->join('kriteria','kriteria.id_kriteria = alternatif.id_kriteria');      
      $this->db->join('subkriteria','subkriteria.id_subkriteria = alternatif.id_subkriteria');      
      $this->db->where('alternatif.id_alternatif',$id);      
      $query = $this->db->get();
      return $query;
	}

    public function get_sub($id_kriteria)
	{
      $query = $this->db->get_where('subkriteria', array('id_kriteria'=>$id_kriteria));
      return $query;
	}

    public function get_detailalternatif()
	{
    $where = $this->session->userdata('id_admin');
      $this->db->select('alternatif.*, detail_alternatif.*');
      $this->db->from('alternatif');    
      $this->db->join('detail_alternatif','alternatif.id_alternatif = detail_alternatif.id_alternatif', 'LEFT');     
      $this->db->where('id_admin', $where);
      $this->db->group_by('alternatif.id_alternatif');  

      $query = $this->db->get();
      return $query;
	}

    //insert alternatif
    public function insert_alternatif($data)
	{
		$this->db->insert('alternatif', $data);
		return $this->db->insert_id();
	}

    public function insert_detail_alternatif($data_detail)
	{
		$this->db->insert('detail_alternatif', $data_detail);
		return $this->db->insert_id();
	}
    
     public function get_editalternatif($dataWhere)
    {
        $this->db->select('*');
        $this->db->from('detail_alternatif');
        $this->db->join('alternatif','alternatif.id_alternatif = detail_alternatif.id_alternatif'); 
        $this->db->where('detail_alternatif.id_alternatif',$dataWhere);      
        $query = $this->db->get();
        return $query;
    }

    public function get_subkriteria(){
        $this->db->select('kriteria.id_kriteria, kriteria.kode_kriteria, kriteria.nama_kriteria, subkriteria.id_subkriteria, subkriteria.nama_subkriteria, subkriteria.bobot');
        $this->db->from('kriteria');
        $this->db->join('subkriteria','kriteria.id_kriteria = subkriteria.id_kriteria'); 
        $this->db->order_by('subkriteria.id_kriteria', 'asc');  
        $query = $this->db->get();
        return $query;
    }
    // C1
    public function getwhereC1()
    {
        $this->db->select('kriteria.jenis');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C1");
        $query = $this->db->get();
        return $query;
    }
    public function getmaxC1()
    {
        $this->db->select_max('C1');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }
    public function getminC1()
    {
        $this->db->select_min('C1');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }

    // C2
    public function getwhereC2()
    {
        $this->db->select('kriteria.jenis');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C2");
        $query = $this->db->get();
        return $query;
    }
    public function getmaxC2()
    {
        $this->db->select_max('C2');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }
    public function getminC2()
    {
        $this->db->select_min('C2');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }

    //C3
    public function getwhereC3()
    {
        $this->db->select('kriteria.jenis');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C3");
        $query = $this->db->get();
        return $query;
    }
    public function getmaxC3()
    {
        $this->db->select_max('C3');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }
    public function getminC3()
    {
        $this->db->select_min('C3');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }

    //C4
    public function getwhereC4()
    {
        $this->db->select('kriteria.jenis');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C4");
        $query = $this->db->get();
        return $query;
    }
    public function getmaxC4()
    {
        $this->db->select_max('C4');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }
    public function getminC4()
    {
        $this->db->select_min('C4');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }

    //C5
    public function getwhereC5()
    {
        $this->db->select('kriteria.jenis');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C5");
        $query = $this->db->get();
        return $query;
    }
    public function getmaxC5()
    {
        $this->db->select_max('C5');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }
    public function getminC5()
    {
        $this->db->select_min('C5');
        $this->db->from('detail_alternatif');
        $query = $this->db->get();
        return $query;
    }

    public function getBobotC1()
    {
        $this->db->select('kriteria.bobot');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C1");
        $query = $this->db->get();
        return $query;
    }
    public function getBobotC2()
    {
        $this->db->select('kriteria.bobot');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C2");
        $query = $this->db->get();
        return $query;
    }
    public function getBobotC3()
    {
        $this->db->select('kriteria.bobot');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C3");
        $query = $this->db->get();
        return $query;
    }
    public function getBobotC4()
    {
        $this->db->select('kriteria.bobot');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C4");
        $query = $this->db->get();
        return $query;
    }
    public function getBobotC5()
    {
        $this->db->select('kriteria.bobot');
        $this->db->from('kriteria');
        $this->db->where('kriteria.kode_kriteria',"C5");
        $query = $this->db->get();
        return $query;
    }
    public function hitungData()
    {
        $where = $this->session->userdata('id_admin');
        $this->db->select('*');
        $this->db->from('alternatif');
        $this->db->where('id_admin', $where);
        $query = $this->db->get();

        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function hitungRangking()
    {
        $where = $this->session->userdata('id_admin');

			$this->db->select('*,penilaian.hasil,alternatif.nama_alternatif');
            $this->db->from('penilaian');
            $this->db->join('alternatif','alternatif.id_alternatif = penilaian.id_alternatif');
            //$this->db->group_by('t.town_id');
            $this->db->where('penilaian.id_admin', $where);
            $this->db->order_by("hasil",'DESC');
            $query = $this->db->get();
            return $query;

    }

    public function keputusan()
    {
        $where = $this->session->userdata('id_admin');
        $this->db->select('alternatif.nama_alternatif');
        $this->db->from('penilaian');
        $this->db->join('alternatif','alternatif.id_alternatif = penilaian.id_alternatif');
        //$this->db->group_by('t.town_id');
        $this->db->limit(1);
        $this->db->where('penilaian.id_admin', $where);
        $this->db->order_by("hasil",'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function totalKriteria() {
		$where = $this->session->userdata('id_admin');
		$this->db->select('COUNT(id_kriteria) as total_kriteria');
		$this->db->from('kriteria');
        $this->db->where('id_admin', $where);

		$hasil = $this->db->get();
		return $hasil;
	}

    public function totalAlternatif() {
		$where = $this->session->userdata('id_admin');
		$this->db->select('COUNT(id_alternatif) as total_alternatif');
		$this->db->from('alternatif');
        $this->db->where('id_admin', $where);

		$hasil = $this->db->get();
		return $hasil;
	}

    public function cek_penilaian() {
		$where = $this->session->userdata('id_admin');
		$this->db->select('*');
		$this->db->from('penilaian');
        $this->db->where('id_admin', $where);

		$hasil = $this->db->get();
		return $hasil;
	}

    public function cek_alternatif($id) {
		$where = $this->session->userdata('id_admin');
		$this->db->select('*');
		$this->db->from('penilaian');
        $this->db->where('id_alternatif', $id);
        $this->db->where('id_admin', $where);

		$hasil = $this->db->get();
		return $hasil;
	}
}

?>