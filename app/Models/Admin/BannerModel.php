<?php
namespace App\Models\Admin;
use CodeIgniter\Model;
class BannerModel extends Model{
    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    public function banner(){
        return $this->db->table($this->table)
        ->get()
        ->getRowArray();

    }
    public function editBannerById($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }
    public function updateBanner($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
}