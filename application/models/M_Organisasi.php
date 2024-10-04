<?php  
defined('BASEPATH') or exit('No direct script access allowed');

Class M_Organisasi extends CI_Model
{
    function tampil_data($email){
        $result = [];
        $where = ['email'=>$email];
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->where($where);
        $data = $this->db->get()->row_array();
        // $query = $this->db->get('loker');
        if(!empty($data)){
            $result = [
                // "id" => $data['id'],
                // "divisi" => $data['divisi'],
                // "nama_perusahaan" => $data['nama_perusahaan'],
                // "alamat" => $data['alamat'],
                // "date_created" => $data['date_created'],
                // "syarat" => $data['syarat'],
                "foto_profil" => $data['foto_profil'],
            ];
        }
        return $result;
	}

    function getsDataUsers($email){
        $result = [];
        $where = ['email'=>$email];
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($where);
        $data = $this->db->get()->row_array();
        if(!empty($data)){
            $result = [
                // "id" => $data['id'],
                "email" => $data['email'],
                "role_id" => $data['role_id'],
            ];
        }
        return $result;
	}
}