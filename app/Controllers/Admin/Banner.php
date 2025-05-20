<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\BannerModel;

class Banner extends BaseController{
    protected $validation;
    public function __construct(){
        $this->bannerModel = new BannerModel();
    }
    public function index(){
       $data['banner'] = $this->bannerModel->banner();
        return $this->adminFrontendLoad('banner/index',$data);
    }
    public function editBanner($id){
        $data['banner'] = $this->bannerModel->editBannerById($id);
        return $this->adminFrontendLoad('banner/edit-banner',$data);
    }
    public function updateBanner(){
        $id = $this->request->getpost('id');
        $data['heading'] = $this->request->getpost('heading');
        $data['content'] = $this->request->getpost('content');
        $data['content1'] = $this->request->getpost('content1');
        $data['content2'] = $this->request->getpost('content2');
        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/banner/', $newName);
                $data["image"] = $newName;
            }
        }
        $updateBanner = $this->bannerModel->updateBanner($id,$data);
        if($updateBanner){
            echo "1";
        }else{
            echo "2";
        }
    }
}