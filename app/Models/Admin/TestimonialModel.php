<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
class TestimonialModel extends Model{
    protected $table = 'testimonial';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    public function testimonialList(){
        return $this->db->table($this->table)
        ->get()
        ->getResultArray();
    }
    public function editTestimonialById($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }
    public function updateTestimonial($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
    public function updateTestimonialStatus($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
}