<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {
	function __construct()
    {
        parent::__construct();   
		$this->load->model('M_Organisasi', 'organisasi');
    }
	public function index()
	{
		$email = $this->session->userdata('email');
		$data['profil'] = $this->organisasi->tampil_data($email);
		// var_dump($data);
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/organisasi/organisasi', $data);
		$this->load->view('components/footer');
	}
}
