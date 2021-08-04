<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function index()
	{
		if($this->session->userdata('name'))
		{
			redirect('admin');
		}

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run() == false)
		{
			$this->load->view('admin/login');
		} else {
			// validasi lolos
			$this->_login();
		}
	}

	private function _login()
	{
		$name 		= $this->input->post('name');
		$password 	= $this->input->post('password');

		$user 		= $this->db->get_where('user', ['name' => $name])->row_array();
		
		// jika usernya ada
		if($user)
		{
				// cek password
				if(password_verify($password, $user['password'])) {
					$data = [
						'name' 		=> $user['name'],
						'role_id' 	=> $user['role_id']

					];

					$this->session->set_userdata($data);
					if($user ['role_id'] == 1) {
						redirect('admin');
					} else if($user ['role_id'] == 2) {
						redirect('user_dokter');
					} else {
						redirect('apoteker');
					}
					
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
					redirect('login');
				}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
			redirect('login');
		}
	}

	public function registration()
	{
		if($this->session->userdata('name'))
		{
			redirect('admin');
		}

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already registered', 'valid_email' => 'email not valid']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]',['matches' => 'password dont match!', 'min_length' => 'password too short!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false)
		{
			$this->load->view('admin/registration');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 3
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">Congratulations! your account has been created. Please Login!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! your account has been created. Please Login!</div>');
			redirect('login');
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout</div>');
		redirect('login');
	}
}
