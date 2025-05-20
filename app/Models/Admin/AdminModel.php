<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
class AdminModel extends Model{
    protected $table = 'user';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    public function loginValify($email,$password){
        return $this->db->table($this->table)
        ->where('email',$email)
        ->where('password',$password)
        ->where('status',1)
        ->get()
        ->getRowArray();
    }
}