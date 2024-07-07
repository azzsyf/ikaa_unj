<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
    {
        parent::__construct();   
    }
	public function login()
	{
		$this->load->view('components/header');
		$this->load->view('pages/auth/login');
	}
}
