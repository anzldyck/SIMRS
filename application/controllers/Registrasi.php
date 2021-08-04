<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Regist_model');
		$this->load->model('Dokter_model');
		$this->load->model('Poliklinik_model');
		$this->load->model('Pasien_model');
		if(!$this->session->userdata('name'))
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$maxid 				= $this->Regist_model->getMaxId();
		$data['no_regis'] 	= "REG00".$maxid;
		$data['registrasi']	= $this->Regist_model->join('registrasi');
		$data['dokter']		= $this->Dokter_model->get('dokter');
		$data['poliklinik']	= $this->Poliklinik_model->get('poliklinik');
		$data['pasien']		= $this->Pasien_model->get('pasien');
		$data['title'] 		= 'Registrasi Rawat Jalan';
		$data['content']	= 'registrasi/index';

		$this->form_validation->set_rules('no_regis', 'Nomor Registrasi', 'required');
		$this->form_validation->set_rules('id_dokter', 'Nama Dokter', 'required');
		$this->form_validation->set_rules('id_poli', 'Nama Poli', 'required');
		$this->form_validation->set_rules('id_pasien', 'Nama Pasien', 'required');
		$this->form_validation->set_rules('tgl_regis', 'Tanggal registrasi', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('layout/wrapper', $data);

		} else {

			$this->Regist_model->add_data();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Registrasi Pasien Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('registrasi');
		}

		
	}

	public function hapus($id)
	{
		$data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$this->Regist_model->delete_data($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Registrasi Berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('registrasi');
	}
}