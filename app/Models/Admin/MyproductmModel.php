<?php
namespace App\Models\Admin;
use CodeIgniter\Model;
class MyproductmModel extends Model{
    protected $table = 'myproduct';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    public function productList(){
        return $this->db->table($this->table)
        ->get()
        ->getResultArray();
    }
    public function checkProduct($slug){
        return $this->db->table($this->table)
        ->where('slug',$slug)
        ->get()
        ->getRowArray();
    }

    public function saveProduct($data){
        return $this->db->table($this->table)
        ->insert($data);
    }

    public function editProductById($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }

    public function updateHome($id,$data){
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

    public function updateProduct($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
    public function checkProductById($id,$slug){
        return $this->db->table($this->table)
        ->where("id!=",$id)
        ->where("slug",$slug)
        ->get()
        ->getRowArray();
    }


}