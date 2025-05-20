<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\HomeModel;


require APPPATH.'TestMail/PHPMailer/src/PHPMailer.php';
require APPPATH.'TestMail/PHPMailer/src/SMTP.php';
require APPPATH.'TestMail/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Home extends BaseController{
    protected $homeModel;
    protected $validation;
    public function __construct(){
		$this->homeModel = new HomeModel();
    }
	
	public function index(){

		$data['productList'] = $this->homeModel->productList(3);
		$data['domesticproductList'] = $this->homeModel->domesticProducthome();
		$data['testimonialList'] = $this->homeModel->testimonialList();
		$data['banner'] = $this->homeModel->banner();
		$data['home'] = $this->homeModel->home();
		$data['logoList'] = $this->homeModel->logoList();
		$page = pageTitle(1);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url() . "'/>
        <link href='" . base_url("") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url() . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url() . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";

		return $this->frontendLoad('index',$data);		
	}

	public function service(){
		$page = pageTitle(11);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("service") . "'/>
        <link href='" . base_url("service") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("service") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("service") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
		return $this->frontendLoad('service',$data);		
	}

    public function about(){
		$data['about'] = $this->homeModel->about();
        $data['logoList'] = $this->homeModel->logoList();
		$page = pageTitle(5);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("about-us") . "'/>
        <link href='" . base_url("about-us") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("about-us") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("about-us") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
		return $this->frontendLoad('about',$data);		
	}
    public function contact(){
        $data['contactData'] = $this->homeModel->contactData();
        $data['addressList'] = $this->homeModel->addressList();
		$page = pageTitle(4);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("contact-us") . "'/>
        <link href='" . base_url("contact-us") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("contact-us") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("contact-us") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
		return $this->frontendLoad('contact',$data);		
	}
    public function blogs(){
        $data['blogList'] = $this->homeModel->blogList();
		$page = pageTitle(12);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("blogs") . "'/>
        <link href='" . base_url("blogs") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("blogs") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("blogs") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
		return $this->frontendLoad('blogs',$data);		
	}
    public function blog($heading_slug){
        $data['blog'] = $this->homeModel->blogBySlug($heading_slug);
        $data['blogCommentList'] = $this->homeModel->blogCommentList($data['blog']['id']);
        $data['blogList'] = $this->homeModel->blogList();
        $data["title"] = $data['blog']['meta_title'];
        $data["meta_description"] = $data['blog']['meta_description'];
        $data["og"] = "<link rel='canonical' href='" . base_url("blog/") . $data['blog']['heading_slug'] . "'/>
        <link href='" . base_url("blog/") . $data['blog']['heading_slug'] . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("blog/") . $data['blog']['heading_slug'] . "'/>
        <meta property='og:title' content='" . $data["blog"]['meta_title'] . "'/>
        <meta property='og:description' content='" . $data["blog"]['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/blog/') . $data["blog"]['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("blog/") . $data['blog']['heading_slug'] . "'/>
        <meta property='twitter:title' content='" . $data["blog"]['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $data["blog"]['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/blog/') . $data["blog"]['og_image'] . "'/>";
        return $this->frontendLoad('blog-detail',$data);	
    }
    public function saveContact(){
		
		$data['name'] = $this->request->getpost('name');
		$data['type'] = $this->request->getpost('type');
		$data['email'] = $this->request->getpost('email');
		$data['phone'] = $this->request->getpost('phone');
		$data['message'] = $this->request->getpost('message');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveContact($data);
		if($save){
			echo "1";
		}else{
			echo "2";
		}
	}
    public function saveProductEnquiry(){
		
		
		$data['product_id'] = $this->request->getpost('productId');

		$data['name'] = $this->request->getpost('name');
		$data['type'] = $this->request->getpost('type');
		$data['email'] = $this->request->getpost('email');
		$data['phone'] = $this->request->getpost('phone');
		$data['state'] = $this->request->getpost('p_state');
		$data['city'] = $this->request->getpost('p_city');
		$data['message'] = $this->request->getpost('message');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveProductEnquiry($data);
		if($save){
			echo "1";
		}else{
			echo "2";
		}
	}
	public function thankYou(){
        $page = pageTitle(6);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("thankyou") . "'/>
        <link href='" . base_url("thankyou") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("thankyou") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("thankyou") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
		return $this->frontendLoad('thankyou',$data);		
	}
	
    public function productDetails($heading_slug){
        
       	$data['product'] = $this->homeModel->productBySlug($heading_slug);
		$data['tagList'] = $this->homeModel->tagListById($data['product']['id']);
		$data["title"] = $data['product']['meta_title'];
        $data["meta_description"] = $data['product']['meta_description'];
        $data["og"] = "<link rel='canonical' href='" . base_url("product/") . $data['product']['heading_slug'] . "'/>
        <link href='" . base_url("product/") . $data['product']['heading_slug'] . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("product/") . $data['product']['heading_slug'] . "'/>
        <meta property='og:title' content='" . $data["product"]['meta_title'] . "'/>
        <meta property='og:description' content='" . $data["product"]['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/product/') . $data["product"]['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("product/") . $data['product']['heading_slug'] . "'/>
        <meta property='twitter:title' content='" . $data["product"]['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $data["product"]['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/product/') . $data["product"]['og_image'] . "'/>";
        return $this->frontendLoad('product-details',$data);
    }
    public function products(){
        $data['productList'] = $this->homeModel->domesticProducts();
        $page = pageTitle(13);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("products") . "'/>
        <link href='" . base_url("products") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("products") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("products") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        return $this->frontendLoad('product-list',$data);		
    }

    // public function productNew(){
    //     $data["title"] = "";
    //     $data["meta_description"] = "";
    //     $data["og"] = "";
    //     return $this->frontendLoad('product-new',$data);		
    // }
    
    public function saveApointmentEnquiry(){
		
		$data['type'] = $this->request->getpost('type');
		$data['name'] = $this->request->getpost('name');
		$data['email'] = $this->request->getpost('email');
		$data['message'] = $this->request->getpost('message');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveApointmentEnquiry($data);

        $mail = new PHPMailer(true);
 
        try {
            $mail->SMTPDebug = false;
            $mail->isSMTP();
            $mail->Host = 'bh-in-15.webhostbox.net';
            $mail->SMTPAuth = true; 
            $mail->Username = 'testsupport@detectivesanjeev.com'; 
            $mail->Password = 'x+nu4fiXa;fr';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port = 587; 
        
            $mail->setFrom('testsupport@detectivesanjeev.com', 'Mailer');
            $mail->addAddress('jai.12go@gmail.com');
            $mail->addReplyTo('testsupport@detectivesanjeev.com', 'Information');
            $mail->isHTML(true); 
            $mail->Subject = 'Here is the subject';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
		if($save){
			echo "1";
		}else{
			echo "2";
		}
	}
    public function saveBlogEnquiry(){
		
        $data['type'] = $this->request->getpost('type');
		$data['blog_id'] = $this->request->getpost('blog_id');
		$data['name'] = $this->request->getpost('name');
		$data['email'] = $this->request->getpost('email');
		$data['message'] = $this->request->getpost('message');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveApointmentEnquiry($data);
		if($save){
			echo "1";
		}else{
			echo "2";
		}
	}
    public function saveSubscribeEnquiry(){
		
		$data['type'] = $this->request->getpost('type');
		$data['name'] = $this->request->getpost('name');
		$data['email'] = $this->request->getpost('email');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveSubscribeEnquiry($data);
		if($save){
			echo "1";
		}else{
			echo "2";
		}

       
	}

	public function myproduct($slug){
        $data['myproduct'] = $this->homeModel->myproductBySlug($slug);
        
		$data["title"] = $data['myproduct']['meta_title'];
        $data["meta_description"] = $data['myproduct']['meta_description'];
        $data["og"] = "<link rel='canonical' href='" . base_url("myproduct/") . $data['myproduct']['slug'] . "'/>
        <link href='" . base_url("myproduct/") . $data['myproduct']['slug'] . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("myproduct/") . $data['myproduct']['slug'] . "'/>
        <meta property='og:tittle' content='" . $data["myproduct"]['meta_title'] . "'/>
        <meta property='og:description' content='" . $data["myproduct"]['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/myyproduct/') . $data["myproduct"]['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("myproduct/") . $data['myproduct']['slug'] . "'/>
        <meta property='twitter:tittle' content='" . $data["myproduct"]['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $data["myproduct"]['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/myproduct/') . $data["myproduct"]['og_image'] . "'/>";
        return $this->frontendLoad('thisproduct',$data);
 }

 public function aproduct($heading_slug){
    $data['aproduct'] = $this->homeModel->aproductBySlug($heading_slug);
 $data['tagList'] = $this->homeModel->tagListById($data['aproduct']['id']);
 $data["title"] = $data['aproduct']['meta_title'];
 $data["meta_description"] = $data['aproduct']['meta_description'];
 $data["og"] = "<link rel='canonical' href='" . base_url("aproduct/") . $data['aproduct']['heading_slug'] . "'/>
 <link href='" . base_url("product/") . $data['aproduct']['heading_slug'] . "' hreflang='en-in' rel='alternet'/>
 <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
 <meta property='og:type' content='website'/>
 <meta property='og:url' content='" . base_url("Aproduct/") . $data['aproduct']['heading_slug'] . "'/>
 <meta property='og:title' content='" . $data["aproduct"]['meta_title'] . "'/>
 <meta property='og:description' content='" . $data["aproduct"]['meta_description'] . "'/>
 <meta property='og:image' content='" . base_url('assets/uploads/myproduct/') . $data["aproduct"]['og_image'] . "'/>
 <meta property='og:image:width' content='1200' />
 <meta property='og:image:height' content='630' />
 <meta property='twitter:card' content='summary_large_image'/>
 <meta property='twitter:url' content='" . base_url("Aproduct/") . $data['aproduct']['heading_slug'] . "'/>
 <meta property='twitter:title' content='" . $data["aproduct"]['meta_title'] . "'/>
 <meta property='twitter:description' content='" . $data["aproduct"]['meta_description'] . "'/>
 <meta property='twitter:image' content='" . base_url('assets/uploads/myproduct/') . $data["aproduct"]['og_image'] . "'/>";
 return $this->frontendLoad('Aproduct',$data);
}

 public function contactme(){
    $data['contactDat'] = $this->homeModel->contactDat();
    $data['addressLis'] = $this->homeModel->addressLis();
    $page = pageTitle(4);
    $data["title"] = $page["meta_title"];
    $data["meta_description"] = $page["meta_description"];
    $data["og"] = "<link rel='canonical' href='" . base_url("contactme") . "'/>
    <link href='" . base_url("contactme") . "' hreflang='en-in' rel='alternet'/>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta property='og:type' content='website'/>
    <meta property='og:url' content='" . base_url("contactme") . "'/>
    <meta property='og:title' content='" . $page['meta_title'] . "'/>
    <meta property='og:description' content='" . $page['meta_description'] . "'/>
    <meta property='og:image' content='" . base_url('assets/uploads/mypage/') . $page['og_image'] . "'/>
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='630' />
    <meta property='twitter:card' content='summary_large_image'/>
    <meta property='twitter:url' content='" . base_url("contactme") . "'/>
    <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
    <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
    <meta property='twitter:image' content='" . base_url('assets/uploads/mypage/') . $page['og_image'] . "'/>";
    return $this->frontendLoad('contactme',$data);		
}

}
