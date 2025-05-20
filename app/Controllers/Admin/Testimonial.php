<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\TestimonialModel;

class Testimonial extends BaseController{
    protected $validation;
    public function __construct(){
        $this->testimonialModel = new TestimonialModel();
    }
    public function index(){
    $data['testimonialList'] = $this->testimonialModel->testimonialList();
        return $this->adminFrontendLoad('testimonial/index',$data);		
    }

    public function editTestimonial($id){
        $data['testimonial'] = $this->testimonialModel->editTestimonialById($id);
        return $this->adminFrontendLoad('testimonial/edit-testimonial',$data);	
    }
    public function updateTestimonial(){
        $id = $this->request->getpost('id');
        $data['name'] = $this->request->getpost('name');
        $data['designation'] = $this->request->getpost('designation');
        $data['content'] = $this->request->getpost('content');
        $data['date'] = date('Y-m-d H:i:s');
        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/testimonial/', $newName);
                $data["image"] = $newName;
            }
        }
    
        $updateTestimonial = $this->testimonialModel->updateTestimonial($id,$data);
        if($updateTestimonial){
            echo "1";
        }else{
            echo "2";
        }
    }
    public function updateTestimonialStatus($id,$status){
        $data['status'] = $status;
        $this->testimonialModel->updateTestimonialStatus($id,$data);
        return redirect()->to('admin/testimonial');
        
    }
}