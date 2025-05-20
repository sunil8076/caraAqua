<!DOCTYPE html>
<html lang="en">

<head>
<title><?php echo $title; ?></title>
  <meta name="author" content="">
  <meta name="description" content="<?php echo $meta_description; ?>">
  <?php if ($og != "") {
    echo $og;
  }?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/home/img/logo/fav-icon.png?v=0.1">
    <link rel="stylesheet" href="<?=base_url()?>assets/home/vendors/bootstrap/css/bootstrap.min.css?v=0.1" media="all">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/vendors/fontawesome/css/all.min.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/vendors/elementskit-icon-pack/assets/css/ekiticons.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/vendors/progressbar-fill-visible/css/progressBar.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/vendors/jquery-ui/jquery-ui.min.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/vendors/modal-video/modal-video.min.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/vendors/fancybox/dist/jquery.fancybox.min.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/vendors/slick/slick.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/vendors/slick/slick-theme.css?v=0.1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/css/style.css?v=0.1">
    
    <base href="<?php echo base_url();?>" id="siteUrl"/>
    <script src="https://code.jquery.com/jquery-3.7.1.js?v=0.1"></script>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="<?=base_url()?>assets/home/img/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <!-- header html start -->
        <header class="site-header site-header-transparent" id="masthead">
            <!-- header html start -->
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-7 flex-grow-1">
                            <div class="schedule-wrapper d-flex justify-content-md-start justify-content-center flex-wrap flex-sm-nowrap">
                            <div class="header-schedule-info">
                            <figure class="contact-icon">
                                    <i aria-hidden="true" class="icon icon-phone-handset"></i>
                                </figure>
                                    <span class="schedule-info">
                                    <a href="tel: +91 9220241010"> +91 9220241010</a> 
                                    </span>
                                </div>
                            <div class="header-schedule-info">
                            <figure class="contact-icon">
                                    <i aria-hidden="true" class="icon icon-envelope3"></i>
                                </figure>
                                <span class="schedule-info">
                                    <a href="mailto:support@karaaqua.com">support@karaaqua.com</a>
                                    </span>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex justify-content-sm-end justify-content-center align-items-center">
                            <div class="header-social social-links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <div class="hb-group d-flex align-items-center justify-content-between">
                        <div class="site-identity col-lg-3">
                            <a href="<?=base_url()?>">
                                <img src="<?=base_url()?>assets/home/img/logo/kara-logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="main-navigation col-lg-9">
                            <nav id="navigation" class="navigation d-none d-lg-inline-block">
                                <ul>
                                    <li class="current-menu-item">
                                        <a href="<?=base_url()?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>about-us">About us</a>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="<?=base_url()?>service">Service</a>
                                        
                                    </li> 
                                    <li class="menu-item-has-children">
                                        <a href="#">Product</a>
                                        <ul>
                                            <?php 
                                            $productList = headerproductList();
                                            if($productList){
                                                foreach($productList as $product){?>
                                            <li>
                                                <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><?= $product['heading'];?></a>
                                            </li>
                                            <?php }}?>
                                        </ul>
                                        
                                    </li> 
                                    <li class="menu-item-has-children">
                                        <a href="#">myProduct</a>
                                        <ul>
                                            <?php 
                                            $myproductList = myproductList();
                                            if($myproductList){
                                                foreach($myproductList as $product){?>
                                            <li>
                                                <a href="<?= base_url();?>myproduct/<?= $product['slug'];?>"><?= $product['product_name'];?></a>
                                            </li>
                                            <?php }}?>
                                        </ul>
                                        
                                    </li> 
                                    <li class="menu-item-has-children">
                                        <a href="#">aProduct</a>
                                        <ul>
                                            <?php 
                                            $aproductLists = aproductList();
                                            if($aproductLists){
                                                foreach($aproductLists as $product){?>
                                            <li>
                                                <a href="<?= base_url();?>Aproduct/<?= $product['heading_slug'];?>"><?= $product['heading'];?></a>
                                            </li>
                                            <?php }}?>
                                        </ul>
                                    </li> 
                                   
                                    <li>
                                        <a href="<?=base_url()?>products">Shop</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>contact-us">Contact</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>contactme">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                            <button type="button" class="btn btn-color" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Get A Quote 
                                  </button>
                        </div>
                        <div class="mobile-menu-container"></div>
                    </div>
                </div>
            </div>
        </header>
        <div class="modal fade" id="exampleModalService" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Submit Your Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <h4 class="cheakout-title" id="servicenameshow"></h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                        <input type="hidden" id="servicename" name="service_type" class="form-control" readonly>

                    <input type="text" name="en-name" placeholder="Name">
                    <span class="message" id="msgname"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="en-phone" placeholder="Phone Number">
                            <span class="message" id="msgphone"></span>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group last-form-group">
                           <input type="email" name="en-email" placeholder="Email Address">
                           <span class="message" id="msgemail"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                           <select name="pop_upstate" id="pop_upstate">
                                <option value="">--Select State--</option>
                                <?php $stateList = stateList();
                                if($stateList){
                                    foreach($stateList as $state){?>
                                <option value="<?= $state['id'];?>"><?= $state['state'];?></option>
                                <?php }}?>
                            </select>
                            <span class="message" id="msgstate"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                           <select name="pop_upcity" id="pop_upcity">
                                <option value="">--Select City--</option>
                            </select>
                            <span class="message" id="msgcity"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="en-pincode" type="text" placeholder="Pin code" inputmode="numeric" maxlength="6">
                        <span class="message" id="msgpincode"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                    <input type="text" name="en-address" placeholder="Address">
                    <span class="message" id="msgaddress"></span>
                        </div>
                    </div>
                   </div>
                   <button class="button-round-primary section-btn" type="button" id="serviceEnquiry">Submit</button>
                </div>
            </div>
        </div>
    </div>
