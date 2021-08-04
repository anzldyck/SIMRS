<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam_medis extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rm_model');
		$this->load->model('Dokter_model');
		$this->load->model('Poliklinik_model');
		$this->load->model('Pasien_model');
		$this->load->model('Obat_model');
		if(!$this->session->userdata('name'))
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		// $maxid 				= $this->Rm_model->getMaxId();
		$data['rkmedis']	= $this->Rm_model->join('rkmedis');
		$data['dokter']		= $this->Dokter_model->get('dokter');
		$data['poliklinik']	= $this->Poliklinik_model->get('poliklinik');
		$data['pasien']		= $this->Pasien_model->get('pasien');
		$data['obat']		= $this->Obat_model->get('obat');
		$data['title'] 		= 'Diagnosa Pasien';
		$data['content']	= 'rkmedis/index';

		$this->form_validation->set_rules('tgl_periksa', 'Tanggal Periksa', 'required');
		$this->form_validation->set_rules('id_pasien', 'Nama Pasien', 'required');
		$this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
		$this->form_validation->set_rules('tensi', 'Tensi', 'required');
		$this->form_validation->set_rules('id_dokter', 'Nama Dokter', 'required');
		$this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
		$this->form_validation->set_rules('id_poli', 'Nama Poli', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Rm_model->add_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Rekam Medis Pasien Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('rekam_medis');
		}
	}

	public function hapus($id)
	{
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$this->Rm_model->delete_data($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Rekam Medis Berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('rekam_medis');
	}
}