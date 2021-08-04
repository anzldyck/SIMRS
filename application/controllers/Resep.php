<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Resep_model');
		$this->load->model('Dokter_model');
		$this->load->model('Obat_model');
		$this->load->model('Pasien_model');
		if(!$this->session->userdata('name'))
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$maxid 				= $this->Resep_model->getMaxId();
		$data['kd_resep'] 	= "RSP00".$maxid;
		$data['resep']		= $this->Resep_model->join('resep');
		$data['dokter']		= $this->Dokter_model->get('dokter');
		$data['obat']		= $this->Obat_model->get('obat');
		$data['pasien']		= $this->Pasien_model->get('pasien');
		$data['title'] 		= 'Resep Obat';
		$data['content']	= 'resep/index';

		$this->form_validation->set_rules('kd_resep', 'Kode Resep', 'required');
		$this->form_validation->set_rules('id_dokter', 'Nama Dokter', 'required');
		$this->form_validation->set_rules('id_obat', 'Nama Obat', 'required');
		$this->form_validation->set_rules('id_pasien', 'Nama Pasien', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Resep_model->add_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Resep Obat Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('resep');
		}

		
	}

	public function hapus($id)
	{
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$this->Resep_model->delete_data($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Resep Obat Berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('resep');
	}
}