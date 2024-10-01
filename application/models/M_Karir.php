<?php  
defined('BASEPATH') or exit('No direct script access allowed');

Class M_Karir extends CI_Model
{
    function tampil_data($id){
        $result = [];
        $where = ['id'=>$id];
        $this->db->select('*');
        $this->db->from('loker');
        $this->db->where($where);
        $data = $this->db->get()->row_array();
        // $query = $this->db->get('loker');
        if(!empty($data)){
            $result = [
                "id" => $data['id'],
                "kategori" => $data['kategori'],
                "divisi" => $data['divisi'],
                "nama_perusahaan" => $data['nama_perusahaan'],
                "alamat" => $data['alamat'],
                "date_created" => $data['date_created'],
                "syarat" => $data['syarat'],
                "gambar" => $data['gambar'],
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

    function getsDataByID($id){
        $result = [];
        $where = ['id'=>$id];
        $this->db->select('*');
        $this->db->from('loker');
        $this->db->where($where);
        $data = $this->db->get()->row_array();
        if(!empty($data)){
            $result = [
                "id" => $data['id'],
                "kategori" => $data['kategori'],
                "nama_perusahaan" => $data['nama_perusahaan'],
                "alamat" => $data['alamat'],
                "divisi" => $data['divisi'],
                "syarat" => $data['syarat'],
                "gambar" => $data['gambar'],
            ];
        }
        return $result;
	}

    function getsKategori()
    {
        $this->db->select('kategori');
        $this->db->distinct();
        $this->db->from('loker');
        $data = $this->db->get()->result_array();
        return $data;
    }
}