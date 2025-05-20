<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\ProductModel;

class Product extends BaseController{
    protected $validation;
    public function __construct(){
        $this->productModel = new ProductModel();
    }
    public function index(){
    $data['productList'] = $this->productModel->productList();
        return $this->adminFrontendLoad('product/index',$data);		
    }

    
    public function createProduct(){
        return $this->adminFrontendLoad("product/add-product");
    }
    
    public function saveProduct(){
        $data['type'] = $this->request->getPost('type');
        $data['heading'] = $this->request->getPost('heading');
        $data['heading_slug'] = $this->request->getPost('heading_slug');
        $data['description'] = $this->request->getPost('description');
        $data['short_description'] = $this->request->getPost('short_description');
        $data['meta_title'] = $this->request->getPost('meta_title');
        $data['meta_description'] = $this->request->getPost('meta_description');
        $data['mrp'] = $this->request->getPost('mrp');
        $data['price'] = $this->request->getPost('price');
        $data['category'] = $this->request->getPost('category');
        
        $data['content'] = $this->request->getPost('content');
        $data['weight'] = $this->request->getPost('weight');
        $data['dimension'] = $this->request->getPost('dimension');

          $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['heading_slug']);
    	$data['heading_slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));	
		$data['date'] = date("Y-m-d H:i:s");

        if($img = $this->request->getFile('thumb_image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["thumb_image"] = $newName;
            }
        }
        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image"] = $newName;
            }
        }
        if($img = $this->request->getFile('image1')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image1"] = $newName;
            }
        }
        if($img = $this->request->getFile('image2')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image2"] = $newName;
            }
        }
        if($img = $this->request->getFile('image3')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image3"] = $newName;
            }
        }
        if($img = $this->request->getFile('image4')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image4"] = $newName;
            }
        }
        if($img = $this->request->getFile('og_image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["og_image"] = $newName;
            }
        }
        
 
        $checkproduct = $this->productModel->checkProduct($data['heading_slug']);
        if($checkproduct){
            echo "1";
        }else{
            $saveproduct = $this->productModel->saveProduct($data);
            if($saveproduct){
                $tags = explode(",",$this->request->getPost('tag'));
                
                foreach ($tags as $index => $tag) {
                    $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
                    $urlValue = str_replace ( $chars, "-", $tag);
                    $slug = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));	
                    $tag = isset($tag) ? trim($tag) : '';
                    $datanew = [
                        'tag' => $tag,
                        'slug' => $slug,
                        'product_id'=>$saveproduct,
                        'date' => date("Y-m-d H:i:s")
                    ];
                    $saveTagData = $this->productModel->saveTagData($datanew);
                }
                if($saveTagData){
                    echo "2";
                }
            }else{
                echo "3";
            }
        }
    }

    public function editProduct($id){
        $data['product'] = $this->productModel->editProductById($id);
        $data['tagList'] = $this->productModel->tagListById($id);
        return $this->adminFrontendLoad("product/edit-product",$data);
    }

    public function updateProduct(){
        $id= $this->request->getPost('id');
        $data['type'] = $this->request->getPost('type');
        $data['heading'] = $this->request->getPost('heading');
        $data['heading_slug'] = $this->request->getPost('heading_slug');
        $data['description'] = $this->request->getPost('description');
        $data['short_description'] = $this->request->getPost('short_description');
        $data['meta_title'] = $this->request->getPost('meta_title');
        $data['meta_description'] = $this->request->getPost('meta_description');
        $data['mrp'] = $this->request->getPost('mrp');
        $data['price'] = $this->request->getPost('price');
        $data['category'] = $this->request->getPost('category');
        // $data['tags'] = $this->request->getPost('tags');
        $data['content'] = $this->request->getPost('content');
        $data['weight'] = $this->request->getPost('weight');
        $data['dimension'] = $this->request->getPost('dimension');

          $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['heading_slug']);
    	$data['heading_slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));	
		$data['date'] = date("Y-m-d H:i:s");

        if($img = $this->request->getFile('thumb_image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["thumb_image"] = $newName;
            }
        }
        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image"] = $newName;
            }
        }
        if($img = $this->request->getFile('image1')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image1"] = $newName;
            }
        }
        if($img = $this->request->getFile('image2')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image2"] = $newName;
            }
        }
        if($img = $this->request->getFile('image3')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image3"] = $newName;
            }
        }
        if($img = $this->request->getFile('image4')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["image4"] = $newName;
            }
        }
        if($img = $this->request->getFile('og_image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $newName);
                $data["og_image"] = $newName;
            }
        }

        $checkproduct = $this->productModel->checkProductById($id,$data['heading_slug']);
        if($checkproduct){
            echo "1";
        }else{
            $updateProduct = $this->productModel->updateProduct($id,$data);
            if($updateProduct){
                $deletetagdata = $this->productModel->deleteTagData($id);
                $tags = explode(",",$this->request->getPost('tag'));
                // print_r($tags);
                foreach ($tags as $index => $tag) {
                    $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
                    $urlValue = str_replace ( $chars, "-", $tag);
                    $slug = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));	
                    $tag = isset($tag) ? trim($tag) : '';
                    $dataupdate = [
                        'tag' => $tag,
                        'slug' => $slug,
                        'product_id'=>$id,
                        'date' => date("Y-m-d H:i:s")
                    ];
                    
                    $updateTagData = $this->productModel->updateTagData($dataupdate);
                }
                if($updateTagData){
                    echo "2";
                }
            }else{
                echo "3";
            }
        }
    }
    public function updateProductStatus($id,$status){
        $data['status'] = $status;
        $this->productModel->updateProductStatus($id,$data);
        return redirect()->to('admin/product');
    }
    public function productDelete($id){
        $this->productModel->productDelete($id);
        return redirect()->to('admin/product');
    }

}