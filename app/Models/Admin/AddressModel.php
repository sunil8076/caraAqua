<?php 
namespace App\Models\Admin;
use CodeIgniter\Model;

class AddressModel extends Model{
    protected $table = "address";

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    public function addressList(){
        return $this->db->table($this->table)
        ->get()
        ->getResultArray();
    }
    public function saveAddress($data){
        return $this->db->table($this->table)
        ->insert($data);
    }
    public function editAddressById($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }
    public function updateAddress($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
    public function updateAddressStatus($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
    public function deleteAddress($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->delete();
    }
    public function countryList(){
        return $this->db->table("country")
        ->get()
        ->getResultArray();
    }
    public function stateListById($countryId){
        return $this->db->table("state")
        ->where('country',$countryId)
        ->get()
        ->getResultArray();
    }
    public function cityListById($stateId){
        return $this->db->table("city")
        ->where('state',$stateId)
        ->get()
        ->getResultArray();
    }

}
