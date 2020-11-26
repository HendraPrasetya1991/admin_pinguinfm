<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
	private $error = '';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function login()
	{
		if ($this->is_login()) return redirect('admin');
		$data['title'] = 'Pinguin Admin Login';
		$data['content'] = 'auth/login';
		$data['error'] = $this->error;
		$this->view_basic($data);
	}

	public function check_login()
	{
		if ($this->is_login()) return redirect('admin');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->login();
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->auth_model->get_user($username, $password);

			if ($user) {
				unset($user['f_password']);
				$this->session->set_userdata('user', $user);
				redirect('admin');
			} else {
				$this->error = 'User and password are invalid.';
				$this->login();
			}

		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		$this->login();
	}
}
