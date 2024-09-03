<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');


class Karir extends CI_Controller {
	function __construct()
    {
        parent::__construct(); 
		$this->load->model('m_karir');  
    }
	public function index()
	{
		$data['loker'] = $this->db->get('loker')->result_array();
		// $data['dataLoker'] = $this->m_karir->getsData();
		// $data['lokerID'] = $this->m_karir->tampil_data($id);

		// var_dump($data['loker']);die;
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/karir', $data);
	}

	function view(){
		$id = $this->uri->segment(3);
		$data['lokerID'] = $this->m_karir->tampil_data($id);
		// var_dump($data);die;

		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/view_karir', $data);
	}

	function save_loker()
	{
		if(!empty($this->input->post())){
			$nama_perusahaan = $this->input->post('nama_perusahaan');
			$alamat = $this->input->post('alamat');
			$divisi = $this->input->post('divisi');
			$syarat = $this->input->post('syarat');
	
			$data = [
				'nama_perusahaan' => $nama_perusahaan,
				'alamat' => $alamat,
				'divisi' => $divisi,
				'syarat' => $syarat,
				'email_created' => $this->session->userdata('email'),
				'date_created' => date('Y-m-d H:i:s'),
			];
			// var_dump($data);die;
			$success = $this->db->insert('loker', $data);
			if($success){
                $response = [
                    "success" => true,
                    "messages" => "Data berhasil disimpan!!",
                    'data' => $data,
                    "code" => 200,
                ];
            }else{
                $response = [
                    "success" => true,
                    "code" => 204,
                    "messages" => "Data gagal disimpan!!",
                ];
            }
            echo json_encode($response);
			// redirect('karir/view');
		}
	}
}
