<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Obat_model');
		if(!$this->session->userdata('name'))
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$maxid 				= $this->Obat_model->getMaxId();
		$data['kd_obat'] 	= "HRB0".$maxid;
		$data['obat']		= $this->Obat_model->get('obat');
		$data['title'] 		= 'Data Obat';
		$data['content']	= 'obat/index';

		$this->load->view('layout/wrapper', $data);
	}

	public function tambah()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Input Data Obat';
		$data['content'] 	= 'pasien/index';

		$this->form_validation->set_rules('nm_obat', 'Nama Obat', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if($this->form_validation->run() == false)
		{

			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Obat_model->add_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Obat Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('obat');
		}
	}

	public function edit($id)
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Edit Data Obat';
		$data['obat'] 		= $this->Obat_model->getById($id);
		$data['content'] 	= 'obat/edit';

		$this->form_validation->set_rules('nm_obat', 'Nama Obat', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if($this->form_validation->run() == false)
		{

			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Obat_model->edit_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Obat Berhasil diubah!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('obat');
		}
		
	}

	public function hapus($id)
	{
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$this->Obat_model->delete_data($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Obat Berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('obat');
	}
}