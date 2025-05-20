<?php 
namespace App\Models\Admin;
use CodeIgniter\Model;

class ContactDetailModel extends Model{
    protected $table = "contact_detail";

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    public function contactData(){
        return $this->db->table($this->table)
        ->get()
        ->getRowArray();
    }
    public function contactDataById($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }
    public function updateContactDetail($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
}
