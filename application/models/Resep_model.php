<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep_model extends CI_Model
{
	public function join()
	{
		$this->db->select('resep.*,dokter.nm_dokter,obat.nm_obat,pasien.nm_pasien');
		$this->db->from('resep');
		$this->db->join('dokter', 'dokter.id_dokter = resep.id_dokter');
		$this->db->join('obat', 'obat.id_obat = resep.id_obat');
		$this->db->join('pasien', 'pasien.id_pasien = resep.id_pasien');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function total()
	{
		$sql 	= "SELECT count(id_resep) as nama FROM resep";
		$result = $this->db->query($sql);
		return $result->row()->nama;
	}

	public function getMaxId() 
	{
		$this->db->select_max('id_resep');
		$this->db->from('resep');
		$query = $this->db->get();
		return $query->row('id_resep') + 1;
	}

	public function add_data()
	{
		$data = [
			'kd_resep' 		=> $this->input->post('kd_resep', true),
			'id_dokter' 	=> $this->input->post('id_dokter', true),
			'id_obat' 		=> $this->input->post('id_obat', true),
			'id_pasien' 	=> $this->input->post('id_pasien', true),
			'keterangan' 	=> $this->input->post('keterangan', true)
		];

		$this->db->insert('resep', $data);
	} 

	public function delete_data($id)
	{
		// $this->db->where('id', $id); // atau
		$this->db->delete('resep', ['id_resep' => $id]);
	}
}