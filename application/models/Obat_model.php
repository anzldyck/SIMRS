<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model
{
	public function get()
	{
		return $this->db->get('obat')->result_array();
	}

	public function getMaxId() 
	{
		$this->db->select_max('id_obat');
		$this->db->from('obat');
		$query = $this->db->get();
		return $query->row('id_obat') + 1;
	}

	public function total()
	{
		$sql 	= "SELECT count(nm_obat) as nama FROM obat";
		$result = $this->db->query($sql);
		return $result->row()->nama;
	}

	public function add_data()
	{
		$data = [
			'kd_obat' 		=> $this->input->post('kd_obat', true),
			'nm_obat' 		=> $this->input->post('nm_obat', true),
			'keterangan' 	=> $this->input->post('keterangan', true)
		];

		$this->db->insert('obat', $data);
	}

	public function edit_data()
	{
		$data = [
			'kd_obat' 		=> $this->input->post('kd_obat', true),
			'nm_obat' 		=> $this->input->post('nm_obat', true),
			'keterangan' 	=> $this->input->post('keterangan', true)
		];

		$this->db->where('id_obat', $this->input->post('id_obat'));
		$this->db->update('obat', $data);
	}

	public function getById($id)
	{
		return $this->db->get_where('obat', ['id_obat' => $id])->row_array();
	}

	public function delete_data($id)
	{
		// $this->db->where('id', $id); // atau
		$this->db->delete('obat', ['id_obat' => $id]);
	}
}