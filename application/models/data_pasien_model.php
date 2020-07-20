<?php

Class Data_Pasien_Model extends CI_Model 
{
	public function tampil_data()
	{
		return $this->db->get('data_pasien');
	}

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function ambil_no_rekam_medis($rekam)
	{
		$result = $this->db->where('no_rekam_medis', $rekam)->get('data_pasien');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;		}
	}

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}