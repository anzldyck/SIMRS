<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rm_model extends CI_Model
{
	public function join()
	{
		$this->db->select('rkmedis.*,dokter.nm_dokter,poliklinik.nm_poli, pasien.nm_pasien');
		$this->db->from('rkmedis');
		$this->db->join('pasien', 'pasien.id_pasien = rkmedis.id_pasien');
		$this->db->join('dokter', 'dokter.id_dokter = rkmedis.id_dokter');
		$this->db->join('poliklinik', 'poliklinik.id_poli = rkmedis.id_poli');
		// $this->db->join('obat', 'obat.id_obat = rkmedis.id_obat');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getMaxId() 
	{
		$this->db->select_max('id_pasien');
		$this->db->from('rkmedis');
		$query = $this->db->get();
		return $query->row('id_pasien') + 1;
	}

	public function total()
	{
		$sql 	= "SELECT count(id_pasien) as nama FROM rkmedis";
		$result = $this->db->query($sql);
		return $result->row()->nama;
	}


	public function add_data()
	{
		$data 	= [
			
			'tgl_periksa' 	=> $this->input->post('tgl_periksa', true),
			'keluhan' 		=> $this->input->post('keluhan', true),
			'tensi' 		=> $this->input->post('tensi', true),
			'id_dokter' 	=> $this->input->post('id_dokter', true),
			'diagnosa' 		=> $this->input->post('diagnosa', true),
			'id_poli' 		=> $this->input->post('id_poli', true)
			// 'id_obat' 		=> $this->input->post('id_obat', true)
			
		];

		$this->db->insert('rkmedis', $data);
	} 

	public function delete_data($id)
	{
		// $this->db->where('id', $id); // atau
		$this->db->delete('rkmedis', ['id_pasien' => $id]);
	}
}