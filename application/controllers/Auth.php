<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct()
    {
        parent::__construct(); 
		$this->load->library('form_validation'); 
		// $this->load->model('Generate_Code');
    }
	public function index()
	{
		if ($this->session->userdata('email')) {
            redirect('home');
        }
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', ['required' => 'Kolom Email wajib diisi.', 'valid_email'=> 'Kolom Email harus berisi alamat email yang valid.']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Kolom Password wajib diisi.']);

		if($this->form_validation->run() == false){
			$this->load->view('components/header');
			$this->load->view('pages/auth/login');
		}else{
			$this->login_user();
		}
	}

	public function v2()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }else{
			$this->load->view('components/header');
            $this->load->view('pages/auth/login_v2');
        }
    }

	function login_user()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'email' => $user['email'],
				];
				$this->session->set_userdata($data);
				$response = [
					'success' => true,
					'code' => 200,
					'messages' => "Selamat anda berhasil login!!",
					'data' => $data,
					'url' => "home/dashboard",
					// 'token' => $this->security->get_csrf_hash(),
				];
				// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf password salah!!</div>');
				// redirect('home/dashboard');
			}else{
				// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf password salah!!</div>');
				// redirect('auth');
				$response = [
					'success' => false,
					'code' => 400,
					'messages' => "Maaf password salah!!",
					'token' => $this->security->get_csrf_hash(),
				];
			}
		}else{
			// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf email anda belum terdaftar!!</div>');
			// redirect('auth');
			$response = [
				'success' => false,
				'code' => 400,
				'messages' => "Maaf email anda belum terdaftarkan!!",
				'token' => $this->security->get_csrf_hash(),
			];
		}
		echo json_encode($response);
	}

	public function registrasi()
	{
		$this->load->view('components/header');
		$this->load->view('pages/auth/registrasi');
	}

	function save_registrasi()
	{
		if(!empty($this->input->post())){
			// $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            $id_anggota = $this->Generate_Code->CreateCode();
			$nama = $this->input->post('nama');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$alamat = $this->input->post('alamat');
			$angkatan = $this->input->post('angkatan');
			$prodi = $this->input->post('prodi');
			$no_hp = $this->input->post('no_hp');
			$email = $this->input->post('email');
			$pekerjaan = $this->input->post('pekerjaan');
			$jabatan = $this->input->post('jabatan');
			$instansi = $this->input->post('instansi');

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$dataRegis = [
				'id_anggota' => $id_anggota,
				'nama_lengkap' => $nama,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'alamat' => $alamat,
				'angkatan' => $angkatan,
				'program_studi' => $prodi,
				'no_hp' => $no_hp,
				'email' => $email,
				'pekerjaan' => $pekerjaan,
				'jabatan' => $jabatan,
				'nama_instansi' => $instansi,
			];
			// var_dump($dataRegis);die;
			$this->db->insert('profil', $dataRegis);
			$dataUser = [
				'email' => $email,
				'username' => $username,
				'password' => password_hash($password, PASSWORD_DEFAULT),
			];
			// var_dump($dataUser);die;
			$this->db->insert('user', $dataUser);

			redirect('auth');
		}else{
			redirect('auth/registrasi');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('email');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah berhasil Logout!!</div>');
		redirect('home');
	}
}
