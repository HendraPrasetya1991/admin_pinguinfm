<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// TODO: change controller name to Home
class Admin extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->is_login()) return redirect('auth');
	}

	public function home()
	{
		$data['title'] = 'Admin Home';
		$data['content'] = 'admin/home';
		$this->view_admin($data);
	}
}
