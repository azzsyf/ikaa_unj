<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();   
    }
	public function index()
	{
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/dashboard');
		$this->load->view('components/footer');
	}
}
