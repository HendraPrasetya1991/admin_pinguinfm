<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	public function get_user($username, $password)
	{
		return $this->db->where('f_username', $username)
						->where('f_password', md5($password))
						->get('tb_admin_login')
						->row_array();
	}
}