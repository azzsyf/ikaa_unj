<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	function __construct()
    {
        parent::__construct();   
		$this->load->model('m_berita');
    }
	public function index()
	{
		$email = $this->session->userdata('email');
		$data['user'] = $this->m_berita->getsDataUsers($email);
		$data['berita'] = $this->db->get('berita')->result_array();
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/berita/berita', $data);
		$this->load->view('components/footer');
	}

	function save_berita()
	{
		if(!empty($this->input->post())){
			$judul = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');
			// $gambar = $this->input->post('gambar');
			if(!empty($_FILES)){
				$path = FCPATH.'asset/images/berita/';
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
							"judul" => $judul,
							"deskripsi" => $deskripsi,
							"gambar" => $fileData['file_name'],
							"date_created" => date("Y-m-d H:i:s"),
							"created_by" => $this->session->userdata('email'),
						];
						$success = $this->db->insert('berita', $data);
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

	function add_berita()
	{
		$email = $this->session->userdata('email');
		$data['user'] = $this->m_berita->getsDataUsers($email);
		$data['loker'] = $this->db->get('loker')->result_array();
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/berita/add_berita', $data);
	}

	function view(){
		$id = $this->uri->segment(3);
		$data['beritaID'] = $this->m_berita->tampil_data($id);
		// var_dump($data);die;

		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/berita/view_berita', $data);
	}

	function edit()
	{
		$id = $this->uri->segment(3);
		$data['berita'] = $this->m_berita->getsData($id);
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/berita/edit_berita', $data);
	}

	function save_edit()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');

		if(!empty($_FILES)){
			$path = FCPATH.'asset/images/berita/';
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
						"judul" => $judul,
						"deskripsi" => $deskripsi,
						"gambar" => $fileData['file_name'],
					];
					// var_dump($data);die;
					$this->db->where($where);
					$success = $this->db->update('berita', $data);
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
		$this->db->delete('berita');
		redirect('berita');
	}
}
