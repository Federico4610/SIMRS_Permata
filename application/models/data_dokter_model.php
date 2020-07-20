<?php

Class Data_Dokter_Model extends CI_Model 
{
	public function tampil_data()
	{
		return $this->db->get('data_dokter');
	}

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function ambil_nidn($id)
	{
		$result = $this->db->where('nidn', $id)->get('data_dokter');
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