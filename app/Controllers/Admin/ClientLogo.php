<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\ClientLogoModel;

class ClientLogo extends BaseController{
    protected $clientLogoModel;
    protected $validation;

    public function __construct(){
        $this->clientLogoModel = new ClientLogoModel();
    }
    public function index(){
        $data["logoList"] = $this->clientLogoModel->logoList();
        return $this->adminFrontendLoad('client-logo/index',$data);
    }
    public function createClientLogo(){		 
		return $this->adminFrontendLoad('client-logo/add_client');		
	}
	public function saveClientLogo(){		
		if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/clientlogo/', $newName);
                $data["image"] = $newName;            
            }
        }
        $data["date"] = date("y-m-d H:i:s");	
        $saveclientlogo = $this->clientLogoModel->saveClientLogo($data);
        if($saveclientlogo){
            echo "1";
        }else{
            echo "2";
        }
    }
    public function editClientLogo($id){        
        $data["clientData"] = $this->clientLogoModel->editClientLogo($id);
        return $this->adminFrontendLoad('client-logo/edit_client',$data);
    }

    public function updateClientLogo(){
        $id = $this->request->getpost("id");
        
        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/clientlogo/', $newName);
                $data["image"] = $newName;            
            }
        }
        $data["date"] = date("y-m-d H:i:s");
        $updateclientlogo = $this->clientLogoModel->updateClientLogo($id,$data);
        if($updateclientlogo){
            echo "1";
        }else{
            echo "2";
        }
    }
    public function updateStatus($id,$status){		
		$data['status'] = $status;
		$this->clientLogoModel->updateStatus( $id , $data );
		return redirect()->to('admin/client-logo');
	}
	public function deleteClientLogo($id){		 	
		$this->clientLogoModel->deleteClientLogo( $id );
		return redirect()->to('admin/client-logo');
	}
}