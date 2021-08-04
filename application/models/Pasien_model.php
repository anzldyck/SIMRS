<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
	public function get()
	{
		
		return $this->db->get('pasien')->result_array();
	}

	public function getMaxId() 
	{
		$this->db->select_max('id_pasien');
		$this->db->from('pasien');
		$query = $this->db->get();
		return $query->row('id_pasien') + 1;
	}

	public function total()
	{
		$sql 	= "SELECT count(nm_pasien) as nama FROM pasien";
		$result = $this->db->query($sql);
		return $result->row()->nama;
	}

	public function add_data()
	{
		$data = [
			'no_rm' 		=> $this->input->post('no_rm', true),
			'nm_pasien' 	=> $this->input->post('nm_pasien', true),
			'jk' 			=> $this->input->post('jk', true),
			'gol_darah' 	=> $this->input->post('gol_darah', true),
			'tempat_lahir' 	=> $this->input->post('tempat_lahir', true),
			'tgl_lahir' 	=> $this->input->post('tgl_lahir', true),
			'alamat' 		=> $this->input->post('alamat', true),
			'no_tlp' 		=> $this->input->post('no_tlp', true)
		];

		$this->db->insert('pasien', $data);
	}

	public function edit_data()
	{
		$data = [
			'no_rm' 		=> $this->input->post('no_rm', true),
			'nm_pasien' 	=> $this->input->post('nm_pasien', true),
			'jk' 			=> $this->input->post('jk', true),
			'gol_darah' 	=> $this->input->post('gol_darah', true),
			'tempat_lahir' 	=> $this->input->post('tempat_lahir', true),
			'tgl_lahir' 	=> $this->input->post('tgl_lahir', true),
			'alamat' 		=> $this->input->post('alamat', true),
			'no_tlp' 		=> $this->input->post('no_tlp', true)
		];

		$this->db->where('id_pasien', $this->input->post('id_pasien'));
		$this->db->update('pasien', $data);
	}

	public function delete_data($id)
	{
		// $this->db->where('id', $id); // atau
		$this->db->delete('pasien', ['id_pasien' => $id]);
	}

	public function getById($id)
	{
		return $this->db->get_where('pasien', ['id_pasien' => $id])->row_array();
	}

	public function add_diagnosa()
	{
		$data = [
			'tgl_periksa' 	=> $this->input->post('tgl_periksa', true),
			
			'keluhan' 		=> $this->input->post('keluhan', true),
			'tensi' 		=> $this->input->post('tensi', true),
			'id_dokter' 	=> $this->input->post('id_dokter', true),
			'diagnosa' 		=> $this->input->post('diagnosa', true),
			'id_poli' 		=> $this->input->post('id_poli', true),
			'id_obat' 		=> $this->input->post('id_obat', true)
			
		];

		$this->db->insert('rkmedis', $data);
	} 

	public function delete_diagnosa($id)
	{
		// $this->db->where('id', $id); // atau
		$this->db->delete('rkmedis', ['id_rkmedis' => $id]);
	}


	// public function laporan()
	// {
		
	// 	$this->db->order_by('tanggal', 'ASC');
	// 	return $this->db->get('produk');
	// 	// $produk = query("SELECT * FROM produk ORDER BY tanggal DESC");
	// }
}