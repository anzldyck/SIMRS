<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_model');
		$this->load->model('Rm_model');
		$this->load->model('Dokter_model');
		$this->load->model('Poliklinik_model');
		$this->load->model('Obat_model');
		if(!$this->session->userdata('name'))
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['user'] 			= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$maxid 					= $this->Pasien_model->getMaxId();
		$data['no_rm'] 			= "RM0".$maxid;
		$data['pasien']			= $this->Pasien_model->get('pasien');
		$data['title'] 			= 'Data Pasien';
		$data['content']		= 'pasien/index';

		$this->load->view('layout/wrapper', $data);
	}

	public function tambah()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Input Data Pasien';
		$data['content'] 	= 'pasien/index';

		$this->form_validation->set_rules('no_rm', 'Nomor RM', 'required');
		$this->form_validation->set_rules('nm_pasien', 'Nama Pasien', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_tlp', 'Nomor Telpon', 'required');

		if($this->form_validation->run() == false)
		{

			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Pasien_model->add_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pasien Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('pasien');
		}
	}

	public function edit($id)
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Edit Data Pasien';
		$data['pasien'] 	= $this->Pasien_model->getById($id);
		$data['content'] 	= 'pasien/edit';

		$this->form_validation->set_rules('no_rm', 'Nomor RM', 'required');
		$this->form_validation->set_rules('nm_pasien', 'Nama Pasien', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_tlp', 'Nomor Telpon', 'required');

		if($this->form_validation->run() == false)
		{

			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Pasien_model->edit_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pasien Berhasil diubah!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('pasien');
		}
		
	}

	public function detail($id)
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Detail Pasien';
		$data['pasien'] 	= $this->Pasien_model->getById($id);
		$data['content'] 	= 'pasien/detail';
		$this->load->view('layout/wrapper', $data);
	}

	public function hapus($id)
	{
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$this->Pasien_model->delete_data($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pasien Berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('pasien');
	}

	public function periksa($id)
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Diagnosa Pasien';
		$data['pasien'] 	= $this->Pasien_model->getById($id);
		$data['rkmedis']	= $this->Rm_model->join('rkmedis');
		$data['dokter']		= $this->Dokter_model->get('dokter');
		$data['poliklinik']	= $this->Poliklinik_model->get('poliklinik');
		$data['obat']		= $this->Obat_model->get('obat');
		$data['content'] 	= 'pasien/periksa';

		$this->form_validation->set_rules('tgl_periksa', 'Tanggal Periksa', 'required');
		$this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
		$this->form_validation->set_rules('tensi', 'Tensi', 'required');
		$this->form_validation->set_rules('id_dokter', 'Nama Dokter', 'required');
		$this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
		$this->form_validation->set_rules('id_poli', 'Nama Poli', 'required');
		$this->form_validation->set_rules('id_obat', 'Nama Obat', 'required');

		$this->load->view('layout/wrapper', $data);

		if($this->form_validation->run() == false)
		{
			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Pasien_model->add_diagnosa();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Rekam Medis Pasien Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('pasien');
		}
	}


	public function delete($id)
	{
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$this->Pasien_model->delete_diagnosa($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Rekam Medis Berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('pasien');
	}
}