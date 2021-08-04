<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_model extends CI_Model
{
	public function join()
	{
		$this->db->select('registrasi.*,dokter.nm_dokter,poliklinik.nm_poli,poliklinik.harga,pasien.nm_pasien,pasien.no_rm');
		$this->db->from('registrasi');
		$this->db->join('dokter', 'dokter.id_dokter = registrasi.id_dokter');
		$this->db->join('poliklinik', 'poliklinik.id_poli = registrasi.id_poli');
		$this->db->join('pasien', 'pasien.id_pasien = registrasi.id_pasien');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getMaxId() 
	{
		$this->db->select_max('id_registrasi');
		$this->db->from('registrasi');
		$query = $this->db->get();
		return $query->row('id_registrasi') + 1;
	}

	public function add_data()
	{
		$data = [
			'no_regis' 		=> $this->input->post('no_regis', true),
			'id_dokter' 	=> $this->input->post('id_dokter', true),
			'id_poli' 		=> $this->input->post('id_poli', true),
			'id_pasien' 	=> $this->input->post('id_pasien', true),
			'tgl_regis' 	=> $this->input->post('tgl_regis', true),
			'biaya' 	=> $this->input->post('biaya', true)
		];

		$this->db->insert('registrasi', $data);
	} 

	public function delete_data($id)
	{
		// $this->db->where('id', $id); // atau
		$this->db->delete('registrasi', ['id_registrasi' => $id]);
	}
}