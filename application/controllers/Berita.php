<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	function __construct()
    {
        parent::__construct();   
		$this->load->model('m_berita', 'berita');
    }
	public function index()
	{
		$email = $this->session->userdata('email');
		$data['user'] = $this->berita->getsDataUsers($email);
		$data['berita'] = $this->db->get('berita')->result_array();
		$data['dataKategori'] = $this->input->get('kategori');
		$data['kategori'] = $this->berita->getsKategori();
		$this->load->view('components/header');
		$this->load->view('components/menu', $data);
		$this->load->view('pages/berita/berita', $data);
		$this->load->view('components/footer');
	}

	function save_berita()
	{
		if(!empty($this->input->post())){
			$judul = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');
			$kategori = $this->input->post('kategori');
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
							"kategori" => strtoupper($kategori),
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
		$data['user'] = $this->berita->getsDataUsers($email);
		$data['berita'] = $this->db->get('berita')->result_array();
		$this->load->view('components/header');
		$this->load->view('components/menu', $data);
		$this->load->view('pages/berita/add_berita', $data);
	}

	function view(){
		$id = $this->uri->segment(3);
		$email = $this->session->userdata('email');
		$data['beritaID'] = $this->berita->tampil_data($id);
		$data['user'] = $this->berita->getsDataUsers($email);
		// var_dump($data);die;

		$this->load->view('components/header');
		$this->load->view('components/menu', $data);
		$this->load->view('pages/berita/view_berita', $data);
	}

	function edit()
	{
		$id = $this->uri->segment(3);
		$email = $this->session->userdata('email');
		$data['berita'] = $this->berita->getsData($id);
		$data['user'] = $this->berita->getsDataUsers($email);
		$this->load->view('components/header');
		$this->load->view('components/menu', $data);
		$this->load->view('pages/berita/edit_berita', $data);
	}

	function save_edit()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');

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
						"kategori" => strtoupper($kategori),
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

	function pin()
	{
		$id = $this->uri->segment(3);
		// var_dump($id);

		$where1 = ['pin' => 1];
		$update = [
			'pin' => "0",
		];

		$this->db->where($where1);
		$success = $this->db->update('berita', $update);
		if($success){
			$where = ['id' => $id];
			if('pin' == 0){
				$update1 = [
					'id' => $id,
					'pin' => "1",
				];
			}
			$this->db->where($where);
			$success = $this->db->update('berita', $update1);
			if($success){
				redirect('berita');
			}
			// echo json_encode($response);
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
