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
                "divisi" => $data['divisi'],
                "nama_perusahaan" => $data['nama_perusahaan'],
                "alamat" => $data['alamat'],
                "date_created" => $data['date_created'],
                "syarat" => $data['syarat'],
            ];
        }
        return $result;
	}

    function getsData(){
        $result = [];
        $this->db->select('*');
        $this->db->from('loker');
        $this->db->order_by('id', 'desc');
        $data = $this->db->get()->result_array();

        if(!empty($data)){
            $result = [
                "id" => $data['id'],
                "divisi" => $data['divisi'],
                "nama_perusahaan" => $data['nama_perusahaan'],
                "alamat" => $data['alamat'],
                "date_created" => $data['date_created'],
                "syarat" => $data['syarat'],
            ];
        }
        return $result;
    }
}