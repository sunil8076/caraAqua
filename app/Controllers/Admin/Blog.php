<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\BlogModel;
class Blog extends BaseController{
    protected $blogModel;
    protected $validation;
    public function __construct(){
        $this->blogModel = new BlogModel();
    }
	
	public function index(){		 	
		$data['blogList'] = $this->blogModel->blogList();
		return $this->adminFrontendLoad('Blog/index', $data);		
	}
	
	public function createBlog(){		 
		return $this->adminFrontendLoad('Blog/addBlog');		
	}
	public function saveBlog(){	

		$data['heading'] = $this->request->getpost('heading');
		$data['description'] = $this->request->getpost('description');
		$data['short_description'] = $this->request->getpost('short_description');
		$data['meta_title'] = $this->request->getpost('meta_title');
		$data['meta_description'] = $this->request->getpost(index: 'meta_description');
		$data['blog_date'] = $this->request->getpost('blog_date');
		$data['heading_slug'] = $this->request->getpost('heading_slug');
        $data['date'] = date("Y-m-d H:i:s");
        $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['heading_slug']);
    	$data['heading_slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));
        
		if($img = $this->request->getFile('image'))
        {
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/blog/', $newName);
                $data["image"] = $newName;
            }
        }
		if($img = $this->request->getFile('thumb_image'))
        {
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/blog/', $newName);
                $data["thumb_image"] = $newName;
            }
        }

		if($img = $this->request->getFile('og_image'))
        {
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/blog/', $newName);
                $data["og_image"] = $newName;
            }
        }
		$checkBlog = $this->blogModel->checkBlog($data['heading_slug']);
		if($checkBlog){
			echo "1";
		}else{
			$save = $this->blogModel->saveBlog( $data );
			if($save){				
				echo "2";
			}else{
				echo "3";
			}		
		}	
	}
	
	public function editBlog($id){		 	
		$data['blog'] = $this->blogModel->blogById( $id );
		return $this->adminFrontendLoad('Blog/editBlog', $data);		
	}

	public function updateBlog(){		 
		$id=$this->request->getPost('id');
		$data['heading'] = $this->request->getpost('heading');
		$data['description'] = $this->request->getpost('description');
		$data['meta_description'] = $this->request->getpost('meta_description');
		$data['meta_title'] = $this->request->getpost('meta_title');
		$data['short_description'] = $this->request->getpost('short_description');
        $data['heading_slug'] = $this->request->getpost('heading_slug');
        $data['blog_date'] = $this->request->getpost('blog_date');
        $data['date'] = date("Y-m-d H:i:s");    
		    
        $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['heading_slug']);
    	$data['heading_slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));
        
		if($img = $this->request->getFile('image'))
        {
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/blog/', $newName);
                $data["image"] = $newName;
            }
        }
		if($img = $this->request->getFile('thumb_image'))
        {
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/blog/', $newName);
                $data["thumb_image"] = $newName;
            }
        }

		if($img = $this->request->getFile('og_image'))
        {
            if ($img->isValid() && ! $img->hasMoved()){
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'assets/uploads/blog/', $newName);
                $data["og_image"] = $newName;
            }
        }

		$checkBlog = $this->blogModel->checkBlogById($id,$data['heading_slug']);
		if($checkBlog){
			echo "1";
		}else{
			$save = $this->blogModel->updateBlog($id, $data );
			if($save){				
				echo "2";
			}else{
					echo "3";
			}
		}			
	}
	public function updateStatus($id,$status){		
		$data['status'] = $status;
		$this->blogModel->updateBlogStatus( $id , $data );
		return redirect()->to('admin/blog');
	}
	
	public function delete($id){		 	
		$this->blogModel->deleteBlog( $id );
		return redirect()->to('admin/blog');
	}
	
	
}

