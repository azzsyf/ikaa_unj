<?php  
defined('BASEPATH') or exit('No direct script access allowed');

Class M_Alumni extends CI_Model
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
}