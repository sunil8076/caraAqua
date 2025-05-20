<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
class EnquiryModel extends Model{

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    public function enquiryList($type){
        return $this->db->table("enquiry")
        ->where('type',$type)
        ->get()
        ->getResultArray();
    }
    public function enquiry($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }
    public function serviceEnquiry($data){
        return $this->db->table("service_enquiry")
        ->insert($data);
    }
    public function serviceEnquiryList(){
        return $this->db->table("service_enquiry")
        ->get()
        ->getResultArray();
    }
    public function cityList($stateid){
        return $this->db->table("city")
        ->where("state",$stateid)
        ->get()
        ->getResultArray();
    }
}