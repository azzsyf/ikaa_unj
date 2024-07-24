<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
	function __construct()
    {
        parent::__construct();   
    }
	public function index()
	{
		$this->load->view('components/header');
		$this->load->view('pages/auth/registrasi');
	}
}
