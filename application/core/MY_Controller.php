<?php
class MY_Controller extends CI_Controller
{
    protected function is_login()
    {
    	return $this->session->has_userdata('user') ? TRUE : FALSE;
    }

	// Please provide 'content' & 'title' via $data array
    protected function view_basic($data)
    {
    	$this->load->view('layouts/basic', $data);
    }
    
    // Please provide 'content' & 'title' via $data array
    protected function view_admin($data)
    {
    	$this->load->view('layouts/admin', $data);
    }
}