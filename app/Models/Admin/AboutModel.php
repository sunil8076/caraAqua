<?php
namespace App\Models\Admin;
use CodeIgniter\Model;
class AboutModel extends Model{
    protected $table = 'about';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    public function about(){
        return $this->db->table($this->table)
        ->get()
        ->getRowArray();
    }
    public function editAboutById($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }

    public function updateAbout($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
}