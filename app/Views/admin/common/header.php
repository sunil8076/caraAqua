<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>kara-aqua</title>
    <base href="<?php echo base_url();?>" id="siteUrl"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css?v=0.1">
		<link href="<?php echo base_url();?>assets/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo base_url();?>assets/admin/js/vendor.bundle.base.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/off-canvas.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/misc.js"></script>
    <script src="https://demo.bootstrapdash.com/stellar-admin/jquery/template/assets/js/settings.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script>
      $(document).ready(function () {
        $( "#datepicker" ).datepicker();
})
    </script>
    <style type="text/css">
    #pageloaddiv {
    	position: fixed;
    	left: 0px;
    	top: 0px;
    	width: 100%;
    	height: 100%;
    	z-index: 999999;
    	background: url('<?php echo base_url("assets/images/loading.gif");?>') no-repeat center center rgba(255,255,255,0.99);
    }
    </style>
    
  </head>
  <body class="sidebar-fixed">
      <div id="pageloaddiv" style="display:none;"></div>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="">kara aqua
          </a>
          <a class="navbar-brand brand-logo-mini" href="">kara aqua</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome To kara aqua Dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="<?php echo base_url();?>assets/admin/images/demo-user.png" alt="Profile image"> <span class="font-weight-normal"> <?=session('adminname')?> </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
               
                <a class="dropdown-item" href="<?=base_url('admin/logout')?>"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo base_url();?>assets/admin/images/demo-user.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?=session('adminname')?></p>
                </div>

              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/myproduct')?>">
                <span class="menu-title">MY Product </span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/Aproduct')?>">
                <span class="menu-title">AProduct </span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/dashboard')?>">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/banner')?>">
                <span class="menu-title">Manage Banner</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/home')?>">
                <span class="menu-title">Manage Home</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/about')?>">
                <span class="menu-title">Manage About</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/product')?>">
                <span class="menu-title">Manage Product</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/testimonial')?>">
                <span class="menu-title">Manage Testimonial</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/client-logo') ?>">
              <span class="menu-title">Manage Client Logo </span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/blog'); ?>">
              <span class="menu-title">Manage Blog</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/contact-detail'); ?>">
              <span class="menu-title">Manage Contact Detail</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/address'); ?>">
              <span class="menu-title">Manage Address</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/page') ?>">
              <span class="menu-title">Manage Page</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/enquiry-list')?>">
                <span class="menu-title">Enquiry</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/contact-enquiry')?>">
                <span class="menu-title">Contact Enquiry</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/apointment-enquiry')?>">
                <span class="menu-title">Apointment Enquiry</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/subscribe-enquiry')?>">
                <span class="menu-title">Subscribe Enquiry</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/product-enquiry')?>">
                <span class="menu-title">Product Enquiry</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/service-enquiry')?>">
                <span class="menu-title">Service Enquiry</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            
          