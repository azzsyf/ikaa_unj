<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_Oauth', 'oauth');
		$this->load->model('Generate_Code');
    }
	public function index()
	{
		if(!empty($this->input->get('code'))){
			$code = $this->input->get('code');
			$token = $this->oauth->getToken($code)->data->token;
			$identity = $this->oauth->getIdentity($token);
			$profile = $identity->data;
			$identitas = $identity->identity;
			$check = $this->db->get_where('user', ['email' => $profile->email])->row_array();
			if($identity->identity == null){
				$uri = 'http://localhost/contract_online/form/ikaa_unj?';
				$redirect = $uri."code=".$code;
				redirect($redirect);
			}elseif($identity->identity != null){
				if(empty($check)){
					$nama = $profile->name;
					$no_hp = $profile->no_phone;
					$email = $profile->email;
					$alamat = $profile->alamat;
					$tempat_lahir = $identitas->tempat_lahir;
					$tanggal_lahir = $identitas->tanggal_lahir;
					$angkatan = $identitas->angkatan;
					$program_studi = $identitas->prodi;
					$pekerjaan = $identitas->pekerjaan;
					$jabatan = $identitas->jabatan;
					$nama_instansi = $identitas->intansi;
					$user = [
						'email' => $email,
					];
					$id_anggota = $this->Generate_Code->CreateCode();
					$checkID = $this->db->get_where('profil', ['id_anggota' => $id_anggota])->row_array();
					if(!empty($checkID)){
						do {
							$checkID = $this->db->get_where('profil', ['id_anggota' => $id_anggota])->row_array();
						} while (!empty($checkID));
					}elseif(empty($checkID)){
						$profile = [
							'id_anggota' => $id_anggota,
							'nama_lengkap' => $nama,
							'tempat_lahir' => $tempat_lahir,
							'tanggal_lahir' => $tanggal_lahir,
							'alamat' => $alamat,
							'angkatan' => $angkatan,
							'program_studi' => $program_studi,
							'no_hp' => $no_hp,
							'email' => $email,
							'pekerjaan' => $pekerjaan,
							'jabatan' => $jabatan,
							'nama_instansi' => $nama_instansi,
						];
						$this->db->insert('user', $user);
						$this->db->insert('profil', $profile);
						$this->session->set_userdata($user);
						redirect('home');
					}
					
				}elseif(!empty($check)){
					$email = $profile->email;
					$data = [
						'email' => $email,
					];
					$this->session->set_userdata($data);
					redirect('home');
				}
				
			}
			
		}else{
			$data['user'] = $this->db->get_where('profil', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('components/header');
			$this->load->view('components/menu');
			$this->load->view('pages/dashboard', $data);
			$this->load->view('components/footer');
		}
	}

	function dashboard()
	{
		if (!$this->session->userdata('email')) {
            redirect('auth');
        } 
		$data['user'] = $this->db->get_where('profil', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('components/header');
		$this->load->view('components/menu');
		$this->load->view('pages/dashboard', $data);
		$this->load->view('components/footer');
	}
}
