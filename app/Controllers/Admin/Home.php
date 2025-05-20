<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\HomeModel;

class Home extends BaseController{
    protected $validation;
    public function __construct(){
        $this->homeModel = new HomeModel();
    }
    public function index(){
       $data['home'] = $this->homeModel->home();
        return $this->adminFrontendLoad('home/index',$data);
    }

    public function editHome($id){
        $data['home'] = $this->homeModel->editHomeById($id);
        return $this->adminFrontendLoad('home/edit-home',$data);
    }
    public function updateHome(){
        $id = $this->request->getpost("id");
        $data['service_heading'] = $this->request->getpost("service_heading");
        $data['service_content'] = $this->request->getpost("service_content");
        $data['about_heading'] = $this->request->getpost("about_heading");
        $data['about_description'] = $this->request->getpost("about_description");
        $data['about_description1'] = $this->request->getpost("about_description1");
        $data['work_heading'] = $this->request->getpost("work_heading");
        $data['work_heading1'] = $this->request->getpost("work_heading1");
        $data['work_heading2'] = $this->request->getpost("work_heading2");
        $data['work_heading3'] = $this->request->getpost("work_heading3");
        $data['work_heading4'] = $this->request->getpost("work_heading4");
        $data['work_content1'] = $this->request->getpost("work_content1");
        $data['work_content2'] = $this->request->getpost("work_content2");
        $data['work_content3'] = $this->request->getpost("work_content3");
        $data['work_content4'] = $this->request->getpost("work_content4");
        $data['partner_heading'] = $this->request->getpost("partner_heading");
        $data['partner_description'] = $this->request->getpost("partner_description");
        $data['date'] = date("Y-m-d H:i:s");
        
        if($img = $this->request->getFile('about_image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/home/', $newName);
                $data["about_image"] = $newName;
            }
        }
        if($img = $this->request->getFile('about_image1')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/home/', $newName);
                $data["about_image1"] = $newName;
            }
        }
        if($img = $this->request->getFile('about_image2')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/home/', $newName);
                $data["about_image2"] = $newName;
            }
        }
        if($img = $this->request->getFile('about_image3')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/home/', $newName);
                $data["about_image3"] = $newName;
            }
        }
        if($img = $this->request->getFile('about_image4')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/home/', $newName);
                $data["about_image4"] = $newName;
            }
        }

        $updateHome = $this->homeModel->updateHome($id,$data);
        if($updateHome){
            echo "1";
        }else{
            echo "2";
        }
    }
}