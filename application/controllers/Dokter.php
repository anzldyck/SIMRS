<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dokter_model');
		if(!$this->session->userdata('name'))
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$maxid 				= $this->Dokter_model->getMaxId();
		$data['kd_dokter'] 	= "DR0".$maxid;
		$data['dokter']		= $this->Dokter_model->get('dokter');
		$data['title'] 		= 'Data Dokter';
		$data['content']	= 'dokter/index';

		$this->load->view('layout/wrapper', $data);
	}

	public function tambah()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Input Data Dokter';
		$data['content'] 	= 'dokter/index';

		$this->form_validation->set_rules('nm_dokter', 'Nama Dokter', 'required');
		$this->form_validation->set_rules('spesialis', 'Spesialis', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_tlp', 'Nomor Telpon', 'required');

		if($this->form_validation->run() == false)
		{

			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Dokter_model->add_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Dokter Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('dokter');
		}
	}

	public function edit($id)
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Edit Data Dokter';
		$data['dokter'] 	= $this->Dokter_model->getById($id);
		$data['content'] 	= 'dokter/edit';

		$this->form_validation->set_rules('kd_dokter', 'Kode Dokter', 'required');
		$this->form_validation->set_rules('nm_dokter', 'Nama Dokter', 'required');
		$this->form_validation->set_rules('spesialis', 'Spesialis', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_tlp', 'Nomor Telpon', 'required');

		if($this->form_validation->run() == false)
		{

			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Dokter_model->edit_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Dokter Berhasil diubah!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('dokter');
		}
		
	}

	public function hapus($id)
	{
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$this->Dokter_model->delete_data($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Dokter Berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('dokter');
	}
}