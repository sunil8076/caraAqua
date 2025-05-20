<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\AdminModel;

class Login extends BaseController{
    protected $adminModel;
    protected $validation;
    public function __construct(){
        $this->adminModel = new AdminModel();
        $this->validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();

    }
    public function index(){
        // echo "dffa";die;
        if($this->session->has('isAdminLoggedIn') && $this->session->get('isAdminLoggedIn')){ 
            return redirect()->to('admin/dashboard');
        }
        return view('admin/login');
    }
    public function dashboard(){
        if($this->session->has('isAdminLoggedIn') && $this->session->get('isAdminLoggedIn')){ 
            $data['title'] = "Dawar Jewellery";
            return $this->adminFrontendLoad('index',$data);
        }
        return redirect()->to('admin-login');
    }
    public function logout(){
        $this->session->destroy();
        return redirect()->to('admin-login');
    }
    public function adminlogin(){

        if ($this->request->getMethod() == "POST") {
            $rules = [
                "email" => [
                    "label" => "Email", 
                    "rules" => "required|valid_email"
                ],
                "password" => [
                    "label" => "Password", 
                    "rules" => "required"
                ]
            ];
    
            if ($this->validate($rules)) {
                $email = $this->request->getpost('email');
                $password = md5($this->request->getpost('password'));
        
        $adminData = $this->adminModel->loginValify($email,$password);
        if($adminData){
        $this->session->set('admin_id',$adminData['id']);
        $this->session->set('adminname',$adminData['name']);
        $this->session->set('isAdminLoggedIn',true);
        return redirect()->to('admin/dashboard');
        
    }
}
}
}
}