<?php  
defined('BASEPATH') or exit('No direct script access allowed');

Class M_Berita extends CI_Model
{
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
        $this->db->from('berita');
        $this->db->where($where);
        $data = $this->db->get()->row_array();
        if(!empty($data)){
            $result = [
                "id" => $data['id'],
                "judul" => $data['judul'],
                "deskripsi" => $data['deskripsi'],
                "gambar" => $data['gambar'],
            ];
        }
        return $result;
	}

    // function search($keyword)
    // {
    //     if(!$keyword){
    //         return null;
    //     }
    //     $this->db->like('title', $keyword);
    //     $this->db->or_like('content', $keyword);
    //     $query = $this->db->get($this->_table);
    //     return $query->result();
    // }
}