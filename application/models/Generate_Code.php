<?php  
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Generate_Code extends CI_Model
{
    public function CreateCode()
    { 
        $this->db->select('RIGHT(profil.id_anggota,4) as id_anggota', FALSE);
        $this->db->order_by('id_anggota','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('profil');
            if($query->num_rows() > 0){      
                $data = $query->row();
                $kode = intval($data->id_anggota) + 1; 
            }
            else{      
                $kode = 1;  
            }
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
        $kodetampil = "IKAA".date('dmy').$batas;
        return $kodetampil; 
    }
    // function CreateCode(){
    //     $q = $this->db->query("SELECT MAX(RIGHT(id_anggota,4)) AS kd_max FROM profil WHERE DATE(id_anggota)=CURDATE()");
    //     $kd = "";
    //     $kd1 = "IKAA";
    //     if($q->num_rows()>0){
    //         foreach($q->result() as $k){
    //             $tmp = ((int)$k->kd_max)+1;
    //             $kd = sprintf("%04s", $tmp);
    //         }
    //     }else{
    //         $kd = ("0001");
    //     }
    //     date_default_timezone_set('Asia/Jakarta');
    //     return $kd1.date('dmy').$kd;
    // }
}