<?php  
defined('BASEPATH') or exit('No direct script access allowed');

Class M_Acara extends CI_Model
{
    function tampil_data($id){
        $result = [];
        $where = ['id'=>$id];
        $this->db->select('*');
        $this->db->from('acara');
        $this->db->where($where);
        $data = $this->db->get()->row_array();
        // $query = $this->db->get('loker');
        if(!empty($data)){
            $result = [
                "id" => $data['id'],
                "judul" => $data['judul'],
                "deskripsi" => $data['deskripsi'],
                "date_created" => $data['date_created'],
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

    function getsData($id){
        $result = [];
        $where = ['id'=>$id];
        $this->db->select('*');
        $this->db->from('acara');
        $this->db->where($where);
        $data = $this->db->get()->row_array();
        if(!empty($data)){
            $result = [
                "id" => $data['id'],
                "kategori" => $data['kategori'],
                "judul" => $data['judul'],
                "deskripsi" => $data['deskripsi'],
                "gambar" => $data['gambar'],
                "status" => $data['status'],
            ];
        }
        return $result;
	}

    function getsKategori()
    {
        $this->db->select('kategori');
        $this->db->distinct();
        $this->db->from('acara');
        $data = $this->db->get()->result_array();
        return $data;
    }
}