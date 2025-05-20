<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\AddressModel;

class Address extends BaseController{
    protected $addressModel;
    protected $validation;
    function __construct(){

        $this->addressModel = new AddressModel();
    }
    public function index(){
        $data['addressList'] = $this->addressModel->addressList();
        return $this->adminFrontendLoad("address/index",$data);
    }
    public function createAddress(){
        
        $data['countryList'] = $this->addressModel->countryList();
        return $this->adminFrontendLoad("address/add-address",$data);

    }
    public function saveAddress(){
        $data['address'] = $this->request->getpost("address");
        $data['country'] = $this->request->getpost("country");
        $data['state'] = $this->request->getpost("state");
        $data['city'] = $this->request->getpost("city");
        $data['pincode'] = $this->request->getpost("pincode");
        $data['date'] = date("Y-m-d H:i:s");
        $saveaddress = $this->addressModel->saveAddress($data);
        if($saveaddress){
            echo "1";
        }else{
            echo "2";
        }
    }
    public function editAddress($id){
        $data['addressData']  = $this->addressModel->editAddressById($id);
        $data['countryList'] = $this->addressModel->countryList();
        return $this->adminFrontendLoad("address/edit-address",$data);
    }
    public function updateAddress(){
        $id = $this->request->getpost("id");
        $data['address'] = $this->request->getpost("address");
        $data['country'] = $this->request->getpost("country");
        $data['state'] = $this->request->getpost("state");
        $data['city'] = $this->request->getpost("city");
        $data['pincode'] = $this->request->getpost("pincode");
        $data['date'] = date("Y-m-d H:i:s");
        $updateAddress = $this->addressModel->updateAddress($id,$data);
        if($updateAddress){
            echo "1";
        }else{
            echo "2";
        }
    }
    public function updateAddressStatus($id,$status){
        $data['status'] = $status;
        $this->addressModel->updateAddressStatus($id,$data);
        return redirect()->to("admin/address");
    }
    public function deleteAddress($id){
        $this->addressModel->deleteAddress($id);
        return redirect()->to("admin/address");
    }
    
    public function stateList(){
        $countryId = $this->request->getpost("country");
        $stateList = $this->addressModel->stateListById($countryId);

        if($stateList){
            foreach($stateList as $state){
                echo '<option value="' . htmlspecialchars($state['id']) . '">' . htmlspecialchars($state['state']) . '</option>';
            }
        }
    }
    public function cityList(){
        $stateId = $this->request->getpost("state");
        $cityList = $this->addressModel->cityListById($stateId);

        if($cityList){
            foreach($cityList as $city){
                echo '<option value="' . htmlspecialchars($city['id']) . '">' . htmlspecialchars($city['city']) . '</option>';
            }
        }
    }

    public function state(){
        $countryId = $this->request->getpost("country");
        $id = $this->request->getpost("id");
        $addressData  = $this->addressModel->editAddressById($id);
        
        $stateList = $this->addressModel->stateListById($countryId);
        if ($stateList) {
            foreach ($stateList as $state) {
                $selected = ($state['id'] == $addressData['state']) ? 'selected' : '';
                echo '<option value="' . htmlspecialchars($state['id']) . '" ' . $selected . '>' . htmlspecialchars($state['state']) . '</option>';
            }
        }
    }

    public function city(){
        $stateId = $this->request->getpost("state");
        $id = $this->request->getpost("id");
        $addressData  = $this->addressModel->editAddressById($id);
        $cityList = $this->addressModel->cityListById($stateId);

        if($cityList){
            foreach($cityList as $city){
                $selected = ($city['id'] == $addressData['city']) ? 'selected' : '';
                echo '<option value="' . htmlspecialchars($city['id']) . '" ' . $selected . '>' . htmlspecialchars($city['city']) . '</option>';
            }
        }
    }


        

	
}