<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Login | kara-aqua</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css" />
  <base href="<?php echo base_url(); ?>" id="siteUrl" />
  <script src="<?php echo base_url(); ?>assets/admin/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/misc.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/login.js"></script>

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-center p-5">
              <div class="brand-logo">
                <h1>kara aqua</h1>
              </div>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" id="login-frm" method="post" action="<?= site_url('admin/User/adminlogin') ?>">
                <?= csrf_field() ?>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                  <span class="message" id="msgemail"></span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                  <span class="message" id="msgpassword"></span>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    LOGIN
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</body>

</html>