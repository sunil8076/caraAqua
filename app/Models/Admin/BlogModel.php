<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
class BlogModel extends Model{
    protected $table = 'blog';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

	public function blogList(){		
		return $this->db->table($this->table)
        ->get()
        ->getResultArray();	
	}
    public function checkBlog( $heading_slug ){		
		return $this->db->table($this->table)
            ->where('heading_slug',$heading_slug)
            ->get()
            ->getRowArray();	
	}

	public function saveBlog( $data ){
        return $this->db->table($this->table)
        ->insert($data);
    }
	public function blogById( $id ){		
		return $this->db->table($this->table)
            ->where('id',$id)
            ->get()
            ->getRowArray();		
	}

    
    public function checkBlogById( $id,$heading_slug){		
		return $this->db->table($this->table)
            ->where('id!=',$id)
			->where('heading_slug',$heading_slug)
            ->get()
            ->getRowArray();		
	}

	public function updateBlog(  $id , $data ){
		return $this->db->table($this->table)
            ->where('id',$id)
            ->update($data);
    }
	public function updateBlogStatus(  $id , $data ){
		return $this->db->table($this->table)
            ->where('id',$id)
            ->update($data);
    }
    
	public function deleteBlog($id){
		return $this->db->table($this->table)
        ->where('id',$id)
        ->delete();
	}
	
    
}
