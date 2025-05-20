<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\MyproductmModel;

class Myproduct extends BaseController{
    protected $myproductmModel;
    protected $validation;
    function __construct(){

        $this->myproductmModel = new MyproductmModel();
    }

    public function index(){
        $data['productList'] = $this->myproductmModel->productList();
        return $this->adminFrontendLoad('myproduct/index',$data);		
    }

    public function createProduct(){
        return $this->adminFrontendLoad('myproduct/add-product');		
    }

    public function saveMyProduct(){
        $data['product_name'] = $this->request->getPost('product_name');
        $data['slug'] = $this->request->getPost('slug');
        $data['description'] = $this->request->getPost('description');
        $data['meta_title'] = $this->request->getPost('meta_title');
        $data['meta_description'] = $this->request->getPost('meta_description');
        

        $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['slug']);
    	$data['slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));	
		$data['date'] = date("Y-m-d H:i:s");
        
        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/myproduct/', $newName);   
                $data["image"] = $newName;
            }

           
        } 
        
        if($imgg = $this->request->getFile('og_image')){
            if ($imgg->isValid() && ! $imgg->hasMoved()){
                $newNamee = $imgg->getRandomName();
                $imgg->move(ROOTPATH . 'assets/uploads/myyproduct/', $newNamee);   
                $data["og_image"] = $newNamee;
            }
        }

        $checkproduct = $this->myproductmModel->checkProduct($data['slug']);
        if($checkproduct){
            echo "1";
        }else{
            $saveproduct = $this->myproductmModel->saveProduct($data);
            if($saveproduct){
                echo "2";
            }else{
                echo "3";
            }
        }
    }

    public function editProduct($id){
        $data['product'] = $this->myproductmModel->editProductById($id);
        // print_r($data['product']);die;
        return $this->adminFrontendLoad("myproduct/edit-product",$data);
    }

    public function updateProduct(){
        $id= $this->request->getPost('id');
        $data['product_name'] = $this->request->getPost('product_name');
        $data['slug'] = $this->request->getPost('slug');
        $data['description'] = $this->request->getPost('description');
        $data['meta_title'] = $this->request->getPost('meta_title');
        $data['meta_description'] = $this->request->getPost('meta_description');

          $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['slug']);
    	$data['slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));	
		$data['date'] = date("Y-m-d H:i:s");

        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/myproduct/', $newName);
                $data["image"] = $newName;
            }
        }

        if($img = $this->request->getFile('og_image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/myyproduct/', $newName);
                $data["og_image"] = $newName;
            }
        }

        $checkproduct = $this->myproductmModel->checkProductById($id,$data['slug']);
        if($checkproduct){
            echo "1";
        }else{
            $updateProduct = $this->myproductmModel->updateProduct($id,$data);
            if($updateProduct){
                
                echo "2";

            }else{
                echo "3";
            }
        }
    }

    public function updateProductStatus($id,$status){
        $data['status'] = $status;
        $this->myproductmModel->updateProductStatus($id,$data);
        return redirect()->to('admin/myproduct');
    }
    public function productDelete($id){
        $this->myproductmModel->productDelete($id);
        return redirect()->to('admin/myproduct');
    }

    

    

}
