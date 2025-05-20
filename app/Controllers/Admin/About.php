<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\AboutModel;

class About extends BaseController{
    protected $validation;
    public function __construct(){
        $this->aboutModel = new AboutModel();
    }
    public function index(){
       $data['about'] = $this->aboutModel->about();
        return $this->adminFrontendLoad('about/index',$data);
    }

    public function editAbout($id){
        $data['about'] = $this->aboutModel->editAboutById($id);
        return $this->adminFrontendLoad('about/edit-about',$data);
    }
    public function updateAbout(){
        $id = $this->request->getpost("id");
        $data['heading'] = $this->request->getpost("heading");
        $data['description'] = $this->request->getpost("description");
        $data['vision_heading'] = $this->request->getpost("vision_heading");
        $data['vision_description'] = $this->request->getpost("vision_description");
        $data['mission_heading'] = $this->request->getpost("mission_heading");
        $data['mission_description'] = $this->request->getpost("mission_description");
        $data['date'] = date("Y-m-d H:i:s");
        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/about/', $newName);
                $data["image"] = $newName;
            }
        }
        if($img = $this->request->getFile('image1')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/about/', $newName);
                $data["image1"] = $newName;
            }
        }
        $updateabout = $this->aboutModel->updateAbout($id,$data);
        if($updateabout){
            echo "1";
        }else{
            echo "2";
        }
    }
}