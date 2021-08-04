<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik_model extends CI_Model
{
	public function get()
	{
		return $this->db->get('poliklinik')->result_array();
	}

	public function add_data()
	{
		$data = [

			'nm_poli' 		=> $this->input->post('nm_poli', true)
		];

		$this->db->insert('poliklinik', $data);
	}

	public function delete_data($id)
	{
		// $this->db->where('id', $id); // atau
		$this->db->delete('poliklinik', ['id_poli' => $id]);
	}

	public function total()
	{
		$sql 	= "SELECT count(nm_poli) as nama FROM poliklinik";
		$result = $this->db->query($sql);
		return $result->row()->nama;
	}
}