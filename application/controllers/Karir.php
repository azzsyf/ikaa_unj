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
		$email = $this->session->userdata('email');
		$data['user'] = $this->m_karir->getsDataUsers($email);
		$data['loker'] = $this->db->get('loker')->result_array();
		// var_dump($data['loker']);die;
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/karir/karir', $data);
		$this->load->view('components/footer');
	}

	function view(){
		$id = $this->uri->segment(3);
		$data['lokerID'] = $this->m_karir->tampil_data($id);
		// var_dump($data);die;

		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/karir/view_karir', $data);
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

	function edit()
	{
		$id = $this->uri->segment(3);
		$data['loker'] = $this->m_karir->getsData($id);
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/karir/edit_karir', $data);
	}

	function save_edit()
	{
		$id = $this->input->post('id');
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$alamat = $this->input->post('alamat');
		$divisi = $this->input->post('divisi');
		$syarat = $this->input->post('syarat');

		$where = ['id' => $id];
		$update = [
			'nama_perusahaan' => $nama_perusahaan,
			'alamat' => $alamat,
			'divisi' => $divisi,
			'syarat' => $syarat,
		];
		// var_dump($update);die;
		$this->db->where($where);
		$success = $this->db->update('loker', $update);
		if($success){
			$response = [
				"success" => true,
				"messages" => "Data berhasil diubah!!",
				'data' => $update,
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
	}

	function delete()
	{
		$id = $this->uri->segment(3);

		$where = ['id' => $id];

		$this->db->where($where);
		$this->db->delete('loker');
		redirect('karir');
	}

	function cari(){
		
	}
}
