<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acara extends CI_Controller {
	function __construct()
    {
        parent::__construct();  
		$this->load->model('m_acara', 'acara');
    }
	public function index()
	{
		$email = $this->session->userdata('email');
		$data['user'] = $this->acara->getsDataUsers($email);
		$data['acara'] = $this->db->get('acara')->result_array();
		$data['dataKategori'] = $this->input->get('kategori');
		$data['kategori'] = $this->acara->getsKategori();

		// var_dump($data['acara']);
		$this->load->view('components/header');
		$this->load->view('components/menu', $data);
		$this->load->view('pages/acara/acara', $data);
		$this->load->view('components/footer');
	}

	function save_acara()
	{
		if(!empty($this->input->post())){
			$kategori = $this->input->post('kategori');
			$judul = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');
			// $gambar = $this->input->post('gambar');
			if(!empty($_FILES)){
				$path = FCPATH.'asset/images/acara/';
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
							"status" => 0,
						];
						// var_dump($data);die;
						$success = $this->db->insert('acara', $data);
						if($success){
							$response = [
								'success' => true,
								'message' => 'Menunggu verifikasi dari admin!',
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

	function add_acara()
	{
		$email = $this->session->userdata('email');
		$data['user'] = $this->acara->getsDataUsers($email);
		$data['acara'] = $this->db->get('acara')->result_array();
		$this->load->view('components/header');
		$this->load->view('components/menu', $data);
		$this->load->view('pages/acara/add_acara', $data);
	}

	function view(){
		$id = $this->uri->segment(3);
		$data['acaraID'] = $this->acara->tampil_data($id);
		$email = $this->session->userdata('email');
		$data['user'] = $this->acara->getsDataUsers($email);

		// var_dump($data);die;

		$this->load->view('components/header');
		$this->load->view('components/menu', $data);
		$this->load->view('pages/acara/view_acara', $data);
	}

	function verify()
	{
        if(!empty($this->input->post())){
			$id = $this->input->post('id');

			$where = ['id' => $id];
			$update = [
				"status" => "1",
			];

			// var_dump($update);die;
				
			$this->db->where($where);
			$success = $this->db->update('acara', $update);
			if($success){
				$response = [
					"success" => true,
					"messages" => "Verifikasi berhasil!!",
				];
			}else{
				$response = [
					"success" => false,
					"messages" => "Atur sebagai default gagal!!",
				];
			}
			echo json_encode($response);
		}else{
            $this->load->view('errors/error');
        }

	}

	function edit()
	{
		$id = $this->uri->segment(3);
		$data['acara'] = $this->acara->getsData($id);
		$email = $this->session->userdata('email');
		$data['user'] = $this->acara->getsDataUsers($email);
		$this->load->view('components/header');
		$this->load->view('components/menu', $data);
		$this->load->view('pages/acara/edit_acara', $data);
	}

	function save_edit()
	{
		$id = $this->input->post('id');
		$kategori = $this->input->post('kategori');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');

		if(!empty($_FILES)){
			$path = FCPATH.'asset/images/acara/';
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
					$success = $this->db->update('acara', $data);
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
		$success = $this->db->update('acara', $update);
		if($success){
			$where = ['id' => $id];
			if('pin' == 0){
				$update1 = [
					'id' => $id,
					'pin' => "1",
				];
			}
			$this->db->where($where);
			$success = $this->db->update('acara', $update1);
			if($success){
				redirect('acara');
			}
			// echo json_encode($response);
		}

	}

	function delete()
	{
		$id = $this->uri->segment(3);

		$where = ['id' => $id];

		$this->db->where($where);
		$this->db->delete('acara');
		redirect('acara');
	}
}
