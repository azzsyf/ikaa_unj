<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();  
    }
	public function index()
	{
		$data['user'] = $this->db->get_where('profil', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/dashboard/dashboard', $data);
		$this->load->view('components/footer');
	}

	function sentral()
	{
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/dashboard/view_sentral');
		// $this->load->view('components/footer');
	}

	function akp2i()
	{
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/dashboard/view_akp2i');
		// $this->load->view('components/footer');
	}

	function digifile()
	{
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/dashboard/view_digifile');
		// $this->load->view('components/footer');
	}
}
