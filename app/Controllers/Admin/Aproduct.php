<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\AproductModel;

class Aproduct extends BaseController{
    protected $AproductModel;
    protected $validation;
    function __construct(){

        $this->AproductModel = new AproductModel();
    }

    public function index(){
        $data['aproductList'] = $this->AproductModel->aproductList();
        return $this->adminFrontendLoad('Aproduct/index',$data);		
    }

    public function createProduct(){
        return $this->adminFrontendLoad("Aproduct/add-product");
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
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["thumb_image"] = $newName;
            }
        }
        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image"] = $newName;
            }
        }
        if($img = $this->request->getFile('image1')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image1"] = $newName;
            }
        }
        if($img = $this->request->getFile('image2')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image2"] = $newName;
            }
        }
        if($img = $this->request->getFile('image3')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image3"] = $newName;
            }
        }
        if($img = $this->request->getFile('image4')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image4"] = $newName;
            }
        }
        if($img = $this->request->getFile('og_image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["og_image"] = $newName;
            }
        }
        
 
        $checkproduct = $this->AproductModel->checkProduct($data['heading_slug']);
        if($checkproduct){
            echo "1";
        }else{
            $saveproduct = $this->AproductModel->saveProduct($data);
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
                    $saveTagData = $this->AproductModel->saveTagData($datanew);
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
        $data['product'] = $this->AproductModel->editProductById($id);
        $data['tagList'] = $this->AproductModel->tagListById($id);
        return $this->adminFrontendLoad("Aproduct/edit-Aproduct",$data);
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
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["thumb_image"] = $newName;
            }
        }
        if($img = $this->request->getFile('image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image"] = $newName;
            }
        }
        if($img = $this->request->getFile('image1')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image1"] = $newName;
            }
        }
        if($img = $this->request->getFile('image2')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image2"] = $newName;
            }
        }
        if($img = $this->request->getFile('image3')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image3"] = $newName;
            }
        }
        if($img = $this->request->getFile('image4')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["image4"] = $newName;
            }
        }
        if($img = $this->request->getFile('og_image')){
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/Aproduct/', $newName);
                $data["og_image"] = $newName;
            }
        }

        $checkproduct = $this->AproductModel->checkProductById($id,$data['heading_slug']);
        if($checkproduct){
            echo "1";
        }else{
            $updateProduct = $this->AproductModel->updateProduct($id,$data);
            if($updateProduct){
                $deletetagdata = $this->AproductModel->deleteTagData($id);
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
                    
                    $updateTagData = $this->AproductModel->updateTagData($dataupdate);
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
        $this->AproductModel->updateProductStatus($id,$data);
        return redirect()->to('admin/Aproduct');
    }
    public function productDelete($id){
        $this->AproductModel->productDelete($id);
        return redirect()->to('admin/product');
    }

    public function aproductDelete($id){
        $this->AproductModel->productDelete($id);
        return redirect()->to('admin/Aproduct');
    }
}
