<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apoteker extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_model');
		$this->load->model('Dokter_model');
		$this->load->model('Obat_model');
		$this->load->model('Poliklinik_model');
		if(!$this->session->userdata('name'))
		{
			redirect('login');
		}
	}
	public function index()
	{
		$data['user'] 	= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['total']	= $this->Pasien_model->total('pasien');
		$data['totald']	= $this->Dokter_model->total('dokter');
		$data['totalo'] = $this->Obat_model->total('obat');
		$data['totalp'] = $this->Poliklinik_model->total('poliklinik');
		$data['title'] 	= 'Dashboard';
		$data['content']= 'apoteker/index';

		$this->load->view('layout/wrapper', $data);

	}

	public function profil()
	{
		$data['user']	= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title']	= 'Profil';
		$data['content']= 'admin/profil';

		$this->load->view('layout/wrapper', $data);
	}

	public function edit()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Edit Profile';
		$data['content']	= 'admin/edit';
		
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		if($this->form_validation->run() == false) 
		{
			$this->load->view('layout/wrapper', $data);
		} else {
			$name 	= $this->input->post('name');
			$email 	= $this->input->post('email');

			// cek jk ada gambar yg di upload
			$upload_image = $_FILES['image']['name'];
			
			if($upload_image)
			{
				$config['allowed_types'] 	= 'gif|jpg|png';
				$config['max_size'] 		= '2048';
				$config['upload_path'] 		= './assets/img/profil/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image'))
				 {
				 	$old_image = $data['user']['image'];
				 	if($old_image != 'default.jpg')
				 	{
				 		unlink(FCPATH . 'assets/img/profil/' . $old_image);
				 	}
				 	$new_image = $this->upload->data('file_name');
				 	$this->db->set('image', $new_image);
				 } else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('email', $email);
			$this->db->where('name', $name); //yg di readonly
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profil has been updated!</div>');
			redirect('admin/edit');
		}
		
	}

	public function changepassword()
	{
		$data['user'] 		= $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
		$data['title'] 		= 'Change Password';
		$data['content'] 	= 'admin/changepassword';
		

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|matches[new_password1]');

		if($this->form_validation->run() == false)
		{

			$this->load->view('layout/wrapper', $data);

		} else {
			$current_password 	= $this->input->post('current_password');
			$new_password 		= $this->input->post('new_password1');

			if (!password_verify($current_password, $data['user']['password']))
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
					redirect('admin/changepassword');


			} else {

				if ($current_password == $new_password) 
				{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same as Current password!</div>');
					redirect('admin/changepassword');

				} else {

					// password sudah ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('name', $this->session->userdata('name'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has changed!</div>');
					redirect('admin/changepassword');
				}
			}
		}
		
	}
}