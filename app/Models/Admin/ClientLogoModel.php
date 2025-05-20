<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
class ClientLogoModel extends Model{
    protected $table = 'client_logo';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    public function logoList(){
        return $this->db->table($this->table)
        ->get()
        ->getResultArray();
    }

    public function saveClientLogo( $data ){
        return $this->db->table($this->table)
        ->insert($data);
    }
    public function editClientLogo( $id ){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->get()
        ->getRowArray();
        
    }
    public function updateClientLogo($id,$data){
        return $this->db->table($this->table)
        ->where("id",$id)
        ->update($data);
    }

    public function updateStatus(  $id , $data ){
		return $this->db->table($this->table)
            ->where('id',$id)
            ->update($data);
    }
    
	public function deleteClientLogo($id){
		return $this->db->table($this->table)
        ->where('id',$id)
        ->delete();
	}
}