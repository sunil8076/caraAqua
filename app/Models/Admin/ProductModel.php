<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
class ProductModel extends Model{
    protected $table = 'product';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    public function productList(){
        return $this->db->table($this->table)
        ->get()
        ->getResultArray();
    }
    public function checkProduct($heading_slug){
        return $this->db->table($this->table)
        ->where("heading_slug",$heading_slug)
        ->get()
        ->getRowArray();
    }
    public function saveProduct($data){
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }
    public function saveTagData($data){
        return $this->db->table("tags")
        ->insert($data);
    }
    public function updateTagData($dataupdate){
        return $this->db->table("tags")
        ->insert($dataupdate);
    }
    public function deleteTagData($id){
        return $this->db->table("tags")
        ->where('product_id',$id)
        ->delete();
    }
    public function tagListById($id){
       return $this->db->table("tags")
        ->where("product_id",$id)
        ->get()
        ->getResultArray();
    }
    
    public function editProductById($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }
    
    public function checkProductById($id,$heading_slug){
        return $this->db->table($this->table)
        ->where("id!=",$id)
        ->where("heading_slug",$heading_slug)
        ->get()
        ->getRowArray();
    }
    public function updateProduct($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
    public function updateProductStatus($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
    public function productDelete($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->delete();
    }
}