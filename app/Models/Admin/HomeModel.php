<?php
namespace App\Models\Admin;
use CodeIgniter\Model;
class HomeModel extends Model{
    protected $table = 'home';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    public function home(){
        return $this->db->table($this->table)
        ->get()
        ->getRowArray();
    }
    public function editHomeById($id){
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
}