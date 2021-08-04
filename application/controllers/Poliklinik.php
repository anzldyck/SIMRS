<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Poliklinik_model');
		if(!$this->session->userdata('name'))
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['poliklinik']	= $this->Poliklinik_model->get('poliklinik');
		$data['title'] 		= 'Poliklinik';
		$data['content']	= 'poliklinik/index';

		$this->load->view('layout/wrapper', $data);
	}

	public function tambah()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Input Poliklinik';
		$data['content'] 	= 'poliklinik/index';

		$this->form_validation->set_rules('nm_poli', 'Nama Poli', 'required');

		if($this->form_validation->run() == false)
		{

			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Poliklinik_model->add_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Poli Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('poliklinik');
		}
	}

	public function hapus($id)
	{
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$this->Poliklinik_model->delete_data($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Poli Berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('poliklinik');
	}
}