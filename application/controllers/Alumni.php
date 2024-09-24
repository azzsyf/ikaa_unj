<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	function __construct()
    {
        parent::__construct();   
    }
	public function index()
	{
		$data['email'] = $this->session->userdata('email');
		// var_dump($email);die;
		$data['profil'] = $this->db->get('profil')->result_array();
		// var_dump($data);
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/alumni/data_alumni', $data);
		$this->load->view('components/footer');
	}
}
