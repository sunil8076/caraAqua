<?php

namespace App\Models;

use CodeIgniter\Model;
class HomeModel extends Model{
    protected $table = 'product';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    public function productList($limit){
        return $this->db->table($this->table)
        ->limit($limit)
        // ->orderby("id","DESC")
        ->where('status','1')
        ->get()
        ->getResultArray();
    }
   
    public function productBySlug($heading_slug){
        return $this->db->table($this->table)
        ->where("heading_slug",$heading_slug)
        ->get()
        ->getRowArray();
    }
    public function testimonialList(){
        return $this->db->table("testimonial")
        ->get()
        ->getResultArray();
    }
    public function saveContact($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }
    public function saveProductEnquiry($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }
    public function saveApointmentEnquiry($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }
    public function saveSubscribeEnquiry($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }
    public function banner(){
        return $this->db->table("banner")
        ->get()
        ->getRowArray();
    }
    public function home(){
        return $this->db->table("home")
        ->get()
        ->getRowArray();
    }
    public function about(){
        return $this->db->table("about")
        ->get()
        ->getRowArray();
    }
    public function logoList(){
        return $this->db->table("client_logo")
        ->where('status','1')
        ->get()
        ->getResultArray();
    }
    public function blogList(){
        return $this->db->table("blog")
        ->where('status','1')
        ->orderby('id',"DESC")
        ->get()
        ->getResultArray();
    }
    public function blogBySlug($heading_slug){
        return $this->db->table("blog")
        ->where('heading_slug',$heading_slug)
        ->get()
        ->getRowArray();
    }
    public function blogCommentList($blog_id){
        return $this->db->table("enquiry")
        ->where('blog_id',$blog_id)
        ->get()
        ->getResultArray();
    }
    public function domesticProducts(){
        return $this->db->table($this->table)
        ->where('status','1')
        ->where('type','2')
        ->get()
        ->getResultArray();
    }
    public function domesticProducthome(){
        return $this->db->table($this->table)
        ->where('status','1')
        ->where('type','2')
        ->limit(6)
        ->get()
        ->getResultArray();
    }
    public function tagListById($product_id){

        return $this->db->table("tags")
        ->where('product_id',$product_id)
        ->get()
        ->getResultArray();

    }
    public function contactData(){
        return $this->db->table("contact_detail")
        ->get()
        ->getRowArray();

    }
    public function addressList(){
        return $this->db->table("address")
        ->get()
        ->getResultArray();

    }

    public function myproductBySlug($slug){
        return $this->db->table("myproduct")
        ->where('slug',$slug)
        ->get()
        ->getRowArray();

    }

    public function contactDat(){
        return $this->db->table("contact_detail")
        ->get()
        ->getRowArray();

    }
    public function addressLis(){
        return $this->db->table("address")
        ->get()
        ->getResultArray();

    }

    public function aproductBySlug($heading_slug){
        return $this->db->table("aproduct")
        ->where("heading_slug",$heading_slug)
        ->get()
        ->getRowArray();
    }
}