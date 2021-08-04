<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model
{
	public function get()
	{
		return $this->db->get('dokter')->result_array();
	}

	public function getMaxId() 
	{
		$this->db->select_max('id_dokter');
		$this->db->from('dokter');
		$query = $this->db->get();
		return $query->row('id_dokter') + 1;
	}

	public function total()
	{
		$sql 	= "SELECT count(nm_dokter) as nama FROM dokter";
		$result = $this->db->query($sql);
		return $result->row()->nama;
	}

	public function add_data()
	{
		$data = [
			'kd_dokter' 	=> $this->input->post('kd_dokter', true),
			'nm_dokter' 	=> $this->input->post('nm_dokter', true),
			'spesialis' 	=> $this->input->post('spesialis', true),
			'jk' 			=> $this->input->post('jk', true),
			'alamat' 		=> $this->input->post('alamat', true),
			'no_tlp' 		=> $this->input->post('no_tlp', true)
		];

		$this->db->insert('dokter', $data);
	}

	public function edit_data()
	{
		$data = [
			'kd_dokter' 	=> $this->input->post('kd_dokter', true),
			'nm_dokter' 	=> $this->input->post('nm_dokter', true),
			'spesialis' 	=> $this->input->post('spesialis', true),
			'jk' 			=> $this->input->post('jk', true),
			'alamat' 		=> $this->input->post('alamat', true),
			'no_tlp' 		=> $this->input->post('no_tlp', true)
		];

		$this->db->where('id_dokter', $this->input->post('id_dokter'));
		$this->db->update('dokter', $data);
	}

	public function delete_data($id)
	{
		// $this->db->where('id', $id); // atau
		$this->db->delete('dokter', ['id_dokter' => $id]);
	}

	public function getById($id)
	{
		return $this->db->get_where('dokter', ['id_dokter' => $id])->row_array();
	}
}