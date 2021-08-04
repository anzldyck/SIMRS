<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller
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
		$data['title'] 		= 'Kwitansi';
		$data['content']	= 'pembayaran/index';

		$this->load->view('layout/wrapper', $data); 
    }
}