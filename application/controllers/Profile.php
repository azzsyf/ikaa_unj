<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct()
    {
        parent::__construct();  
    }
	public function index()
	{
		$data['email'] = $this->session->userdata('email');
		$data['profil'] = $this->db->get_where('profil', ['email' => $data['email']])->row_array();
		// var_dump($data1);die; 
		if ($this->session->userdata('email')) {
			$this->load->view('components/header');
			$this->load->view('components/menu');
			$this->load->view('pages/profile/profil', $data);
        }else{
			redirect('home');
		}
	}

	function upload()
	{
		if(!empty($_FILES)){
            $path = FCPATH.'asset/images/uploads/';
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
                        "id_anggota" => $this->input->post('id_anggota'),
                        "file_name" => $fileData['file_name'],
                        "date_time" => date("Y-m-d H:i:s"),
                        "created_by" => $this->session->userdata('email'),
                    ];
                    // var_dump($data);die;

                    // $file_data  = $this->upload->data();
                    // $file_name  = $file_data['file_name'];
                    $success = $this->db->insert('foto_profil', $data);
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

    function save_edit()
	{
		$id_anggota = $this->input->post('id_anggota');
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$angkatan = $this->input->post('angkatan');
		$prodi = $this->input->post('program_studi');
		$no_hp = $this->input->post('no_hp');
		// $email = $this->input->post('email');
		$pekerjaan = $this->input->post('pekerjaan');
		$jabatan = $this->input->post('jabatan');
		$instansi = $this->input->post('nama_instansi');

		if(!empty($_FILES)){
            $path = FCPATH.'asset/images/profil/';
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
					$where = ['id_anggota' => $id_anggota];
                    $data = [
						"nama_lengkap" => $nama,
						"tempat_lahir" => $tempat_lahir,
						"tanggal_lahir" => $tanggal_lahir,
						"alamat" => $alamat,
						"angkatan" => $angkatan,
						"program_studi" => $prodi,
						"no_hp" => $no_hp,
						"pekerjaan" => $pekerjaan,
						"jabatan" => $jabatan,
						"nama_instansi" => $instansi,
                        "foto_profil" => $fileData['file_name'],
                    ];
                    // var_dump($data);die;

					$this->db->where($where);
                    $success = $this->db->update('profil', $data);
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
}
