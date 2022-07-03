<?php

class Mcrud extends CI_Model{
    
    public function get_all_data($tabel){
        $q=$this->db->get($tabel);
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
      $this->db->select('alternatif.*, detail_alternatif.*');
      $this->db->from('alternatif');    
      $this->db->join('detail_alternatif','alternatif.id_alternatif = detail_alternatif.id_alternatif', 'LEFT');      
      $this->db->group_by('alternatif.id_alternatif');  

      $query = $this->db->get();
      return $query;
	}

    public function get_detailalternatifbismillah()
	{
      $this->db->select('alternatif.*, subkriteria.nama_subkriteria, alternatif.nama_alternatif, kriteria.nama_kriteria');
      $this->db->from('detail_alternatif');
      $this->db->join('alternatif','alternatif.id_alternatif = detail_alternatif.id_alternatif', 'LEFT');      
      $this->db->join('kriteria','kriteria.id_kriteria = detail_alternatif.id_kriteria', 'LEFT');      
      $this->db->join('subkriteria','subkriteria.id_subkriteria = detail_alternatif.id_subkriteria', 'LEFT');   
      $this->db->group_by('detail_alternatif.id_kriteria');      
      $this->db->group_by('detail_alternatif.id_alternatif');      
      $query = $this->db->get();
      //var_dump ($query);
      return $query;
	}
    public function nama_alternatif()
	{
      $this->db->select('*');
      $this->db->from('alternatif');    
      $this->db->group_by('nama_alternatif');      
      $query = $this->db->get();
      //var_dump ($query);
      return $query;
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



}

?>