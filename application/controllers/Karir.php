<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');


class Karir extends CI_Controller {
	function __construct()
    {
        parent::__construct(); 
		$this->load->model('m_karir', 'karir');  
    }
	public function index()
	{
		$email = $this->session->userdata('email');
		$data['user'] = $this->karir->getsDataUsers($email);
		$data['loker'] = $this->db->get('loker')->result_array();

		$data['dataKategori'] = $this->input->get('kategori');
		$data['kategori'] = $this->karir->getsKategori();

		// var_dump($data['dataKategori']);die;
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/karir/karir', $data);
		$this->load->view('components/footer');
	}

	function view(){
		$id = $this->uri->segment(3);
		$data['lokerID'] = $this->karir->tampil_data($id);
		// var_dump($data);die;

		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/karir/view_karir', $data);
	}

	function add_karir()
	{
		$email = $this->session->userdata('email');
		$data['user'] = $this->karir->getsDataUsers($email);
		$data['loker'] = $this->db->get('loker')->result_array();
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/karir/add_karir', $data);
	}

	function save_loker()
	{
		if(!empty($this->input->post())){
			$kategori = $this->input->post('kategori');
			$nama_perusahaan = $this->input->post('nama_perusahaan');
			$alamat = $this->input->post('alamat');
			$divisi = $this->input->post('divisi');
			$syarat = $this->input->post('syarat');

			if(!empty($_FILES)){
				$path = FCPATH.'asset/images/karir/';
				$config['upload_path']      = $path;       
				$config['allowed_types']    = 'png|PNG|jpg|JPG|jpeg|JPEG|pdf';
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if(!empty($_FILES['gambar']['name'])){
					$_FILES["img"]["name"] = $_FILES["gambar"]["name"];
					$_FILES["img"]["type"] = $_FILES["gambar"]["type"];
					$_FILES["img"]["tmp_name"] = $_FILES["gambar"]["tmp_name"];
					$_FILES["img"]["error"] = $_FILES["gambar"]["error"];
					$_FILES["img"]["size"] = $_FILES["gambar"]["size"];
	
					
					if(!$this->upload->do_upload('img')){
						$response = [
							'error_message' => $this->upload->display_errors(),
						];
					}else{
						$fileData = $this->upload->data(); 
						$data = [
							'kategori' => strtoupper($kategori),
							'nama_perusahaan' => $nama_perusahaan,
							'alamat' => $alamat,
							'divisi' => $divisi,
							'syarat' => $syarat,
							"gambar" => $fileData['file_name'],
							'email_created' => $this->session->userdata('email'),
							'date_created' => date('Y-m-d H:i:s'),
						];
						$success = $this->db->insert('loker', $data);
						if($success){
							$response = [
								'success' => true,
								'message' => 'Data berhasil disimpan!',
								'code' => 200,
							];
						} else {
							$response = [
								'success' => true,
								'message' => 'Data gagal disimpan.. Coba ulangi lagi tahap ini.',
								'code' => 402,
							];
						}
						echo json_encode($response);
					}
				}else{
					$this->load->view('errors/error');
				}
			}else{
				$this->load->view('errors/error');
			}
		}
	}

	function edit()
	{
		$id = $this->uri->segment(3);
		$data['loker'] = $this->karir->getsDataByID($id);
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/karir/edit_karir', $data);
	}

	function save_edit()
	{
		$id = $this->input->post('id');
		$kategori = $this->input->post('kategori');
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$alamat = $this->input->post('alamat');
		$divisi = $this->input->post('divisi');
		$syarat = $this->input->post('syarat');

		if(!empty($_FILES)){
			$path = FCPATH.'asset/images/karir/';
			$config['upload_path']      = $path;       
			$config['allowed_types']    = 'png|PNG|jpg|JPG|jpeg|JPEG|pdf';
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			if(!empty($_FILES['gambar']['name'])){
				$_FILES["img"]["name"] = $_FILES["gambar"]["name"];
				$_FILES["img"]["type"] = $_FILES["gambar"]["type"];
				$_FILES["img"]["tmp_name"] = $_FILES["gambar"]["tmp_name"];
				$_FILES["img"]["error"] = $_FILES["gambar"]["error"];
				$_FILES["img"]["size"] = $_FILES["gambar"]["size"];

				
				if(!$this->upload->do_upload('img')){
					$response = [
						'error_message' => $this->upload->display_errors(),
					];
				}else{
					$fileData = $this->upload->data(); 
					$where = ['id' => $id];
					$data = [
						'kategori' => strtoupper($kategori),
						'nama_perusahaan' => $nama_perusahaan,
						'alamat' => $alamat,
						'divisi' => $divisi,
						'syarat' => $syarat,
						"gambar" => $fileData['file_name'],
					];
					$this->db->where($where);
					$success = $this->db->update('loker', $data);
					if($success){
						$response = [
							'success' => true,
							'message' => 'Data berhasil diubah!',
							'code' => 200,
						];
					} else {
						$response = [
							'success' => true,
							'message' => 'Data gagal disimpan.. Coba ulangi lagi tahap ini.',
							'code' => 402,
						];
					}
					echo json_encode($response);
				}
			}else{
				$this->load->view('errors/error');
			}
		}else{
			$this->load->view('errors/error');
		}
	}

	function delete()
	{
		$id = $this->uri->segment(3);

		$where = ['id' => $id];

		$this->db->where($where);
		$this->db->delete('loker');
		redirect('karir/add_karir');
	}
}
