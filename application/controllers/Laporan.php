<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Laporan_model');
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
		$data['user'] 	= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$dari 			= $this->input->post('dari');
		$sampai 		= $this->input->post('sampai');

		$this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
		$this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');

		if($this->form_validation->run() == false)
		{
			$data['title'] 		= 'Laporan Rawat Jalan';
			$data['content'] 	= 'laporan/laporan_registrasi';
			$this->load->view('layout/wrapper', $data);

		} else {

			$data['registrasi']	= $this->Regist_model->join('registrasi');
			$data['dokter']		= $this->Dokter_model->get('dokter');
			$data['poliklinik']	= $this->Poliklinik_model->get('poliklinik');
			$data['pasien']		= $this->Pasien_model->get('pasien');
			$data['registrasi'] = $this->db->query("SELECT * FROM registrasi r, dokter d, poliklinik po, pasien p WHERE r.id_dokter=d.id_dokter AND r.id_poli=po.id_poli AND r.id_pasien=p.id_pasien AND date(tgl_regis) >= '$dari' AND date(tgl_regis) <= '$sampai' ORDER BY tgl_regis ASC")->result_array();
			$data['title'] 		= 'Filter Laporan';
			$data['content'] 	= 'laporan/laporan_report';
			$this->load->view('layout/wrapper', $data);
		}
		
	}

	public function print()
	{
		$dari 				= $this->input->get('dari');
		$sampai 			= $this->input->get('sampai');
		$data['registrasi'] = $this->db->query("SELECT * FROM registrasi r, dokter d, poliklinik po, pasien p WHERE r.id_dokter=d.id_dokter AND r.id_poli=po.id_poli AND r.id_pasien=p.id_pasien AND date(tgl_regis) >= '$dari' AND date(tgl_regis) <= '$sampai' ORDER BY tgl_regis ASC")->result_array();
		$data['title'] = 'Filter Laporan';
		$this->load->view('layout/head');
		$this->load->view('laporan/print', $data);
		// $this->load->view('layout/footer');
	}
}