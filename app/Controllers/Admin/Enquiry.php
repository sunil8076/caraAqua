<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\EnquiryModel;

class Enquiry extends BaseController{
    protected $enquiryModel;
    protected $validation;
    public function __construct(){
        $this->enquiryModel = new EnquiryModel();
    }
    public function index(){
        $data["enquiryList"] = $this->enquiryModel->enquiryList(null);
        return $this->adminFrontendLoad('enquiry/enquiry',$data);		
    }
    public function enquiry(){
        
        $data["name"] = $this->request->getpost('name');
        $data["phone"] = $this->request->getpost('number');
        $data["address"] = $this->request->getpost('address');
        $data["email"] = $this->request->getpost('email');
        $data["state"] = $this->request->getpost('pop_upstate');
        $data["city"] = $this->request->getpost('pop_upcity');
        $data["pincode"] = $this->request->getpost('pincode');
        $data["date"] = date("Y-m-d H:i:s");
        
        $enquiry = $this->enquiryModel->enquiry($data);
        if($enquiry){
        echo 1;
        }else{
            echo 2;
        }
    }
    public function productEnquiry(){
        $data["enquiryList"] = $this->enquiryModel->enquiryList(2);
        return $this->adminFrontendLoad('enquiry/product-enquiry',$data);		
    }
    public function contactEnquiry(){
        $data["enquiryList"] = $this->enquiryModel->enquiryList(1);
        return $this->adminFrontendLoad('enquiry/contact-enquiry',$data);		
    }
    public function apointmentEnquiry(){
        $data["enquiryList"] = $this->enquiryModel->enquiryList(3);
        return $this->adminFrontendLoad('enquiry/apointment-enquiry',$data);		
    }
    
    public function serviceEnquiry(){
        
        $data["service_name"] = $this->request->getpost('service_name');
        $data["name"] = $this->request->getpost('name');
        $data["email"] = $this->request->getpost('email');
        $data["phone"] = $this->request->getpost('phone');
        $data["address"] = $this->request->getpost('address');
        $data["state"] = $this->request->getpost('state');
        $data["city"] = $this->request->getpost('city');
        $data["pincode"] = $this->request->getpost('pincode');
        $data["date"] = date("Y-m-d H:i:s");
        
        $enquiry = $this->enquiryModel->serviceEnquiry($data);
        if($enquiry){
        echo 1;
        }else{
            echo 2;
        }
    }
    public function serviceEnquiryList(){
        $data["enquiryList"] = $this->enquiryModel->serviceEnquiryList();
        return $this->adminFrontendLoad('enquiry/service-enquiry',$data);
    }
    public function subscribeEnquiry(){
        $data["enquiryList"] = $this->enquiryModel->enquiryList(4);
        return $this->adminFrontendLoad('enquiry/subscribe-enquiry',$data);
    }
    public function cityList(){

        $stateId = $this->request->getPost('state');
       $cityList = $this->enquiryModel->cityList($stateId);
       if($cityList){
            foreach ($cityList as $city) {
            echo '<option value="' . htmlspecialchars($city['id']) . '">' . htmlspecialchars($city['city']) . '</option>';
            }
        }
    }
}