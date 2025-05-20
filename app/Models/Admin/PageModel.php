<?php
namespace App\Models\Admin;
use CodeIgniter\Model;
class PageModel extends Model{
    protected $table = 'page_title';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
	public function get(){		
		return $this->db->table($this->table)
        ->get()
        ->getResultArray();
	}
    public function edit($id){		
		return $this->db->table($this->table)
        ->where("id",$id)
        ->get()
        ->getRowArray();
	}
    public function updateabout($id,$data){		
		return $this->db->table($this->table)
        ->where("id",$id)
        ->update($data);

	}

}