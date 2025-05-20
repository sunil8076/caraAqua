<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Submit Your Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           
                <h4 class="cheakout-title">Basic Details:</h4> 
            
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                    <input type="text" name="pop_upname" placeholder="Name">
                    <span class="message" id="msgpop_upname"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                           
                            <input type="text" name="number" placeholder="Phone Number">
                            <span class="message" id="msgpop_upnumber"></span>
                            
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group last-form-group">
                           <input type="email" name="pop_upemail" placeholder="Email Address">
                           <span class="message" id="msgpop_upemail"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                           <select name="fpop_upstate" id="fpop_upstate">
                                <option value="">--Select State--</option>
                                <?php $stateList = stateList();
                                if($stateList){
                                    foreach($stateList as $state){?>
                                <option value="<?= $state['id'];?>"><?= $state['state'];?></option>
                                <?php }}?>
                            </select>
                            <span class="message" id="msgpop_upstate"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                           <select name="fpop_upcity" id="fpop_upcity">
                                <option value="">--Select City--</option>
                            </select>
                            <span class="message" id="msgpop_upcity"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="pincode" type="text" placeholder="Pin code" inputmode="numeric" maxlength="6">
                        <span class="message" id="msgpop_uppincode"></span>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                    <input type="text" name="address" placeholder="Address">
                    <span class="message" id="msgpop_upaddress"></span>
                        </div>
                    </div>
                   </div>
                   <button class="button-round-primary section-btn" type="button" id="enquiry">Submit</button>
                </div>
        </div>
      
      </div>
    </div>
  </div>
 
<!-- footer part -->

<footer id="colophon" class="site-footer">
            <!-- <div class="footer-contact-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center justify-content-md-start">
                        <div class="col-md-6 col-sm-6">
                            <div class="contact-info">
                                <figure class="contact-icon">
                                    <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                </figure>
                                <div class="contact-deatil">
                                    <p><strong>India Address: </strong>
                                    Jain Complex, Off. no.: 101, First Floor, 46/47 West Guru Angad Nagar, Laxmi Nagar Delhi 110092.
                                    </p>
                                    <p><strong>Europe Address: </strong>Rua Josefa Obidos 80, 5 - A Sao Domingos de Rana, 2785-504 Lisbon Portugal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="contact-info">
                                <figure class="contact-icon">
                                    <i aria-hidden="true" class="icon icon-envelope3"></i>
                                </figure>
                                <aside class="contact-deatil">
                                    <span class="contact-title">
                                        Email us :
                                    </span>
                                    <p><a href="mailto:support@karaaqua.com">support@karaaqua.com</a></p>
                                    <p><a href="mailto:info@karaaqua.com">info@karaaqua.com</a></p>
                                </aside>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="contact-info">
                                <figure class="contact-icon">
                                    <i aria-hidden="true" class="icon icon-phone-handset"></i>
                                </figure>
                                <aside class="contact-deatil">
                                    <span class="contact-title">
                                        Call us now :
                                    </span>
                                    <a href="tel: +9220241010"> +91 9220241010</a> <br>
                                    <a href="tel: +9220241010"> +91 9220231010</a>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-wrapper">
                        <div class="top-footer">
                            <div class="row">
                                <div class="col-lg-5">
                                    <aside class="widget widget_text img-textwidget primary-bg">
                                        <div class="footer-logo">
                                            <a href="<?= base_url();?>">
                                                <img src="<?=base_url()?>assets/home/img/logo/white-logo.png" alt="logo">
                                            </a>
                                        </div>
                                        <div class="textwidget widget-text">
                                        Kara Water Systems specializes in air-to-water dispensers that extract moisture from the air.
                                        </div>
                                        <div class="footer-social-links">
                                            <?php 
                                            $contactDetail = contactDetail();?>
                                            <ul>
                                                <li>
                                                    <a href="<?= $contactDetail['facebook_url'];?>" target="_blank">
                                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= $contactDetail['twitter_url'];?>" target="_blank">
                                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= $contactDetail['instagram_url'];?>" target="_blank">
                                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= $contactDetail['youtube_url'];?>" target="_blank">
                                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <aside class="widget">
                                        <h5 class="widget-title">Useful Links</h5>
                                        <ul class="widget-underline">
                                            <li>
                                                <a href="<?= base_url();?>about-us">About us</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url();?>service">Service</a>
                                            </li> 
                                            <li>
                                                <a href="<?= base_url();?>blogs">Blogs</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url();?>contact-us">Contact Us</a>
                                            </li>
                                        </ul>
                                    </aside>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <aside class="widget">
                                        <h5 class="widget-title">Categories</h5>
                                        <ul>
                                            <?php
                                            $footerproductList = footerproductList();
                                             if($footerproductList){
                                                foreach($footerproductList as $footerproduct){?>
                                            <li>
                                                <a href="<?=base_url();?>product/<?= $footerproduct['heading_slug'];?>"><?= $footerproduct['heading'];?></a>
                                            </li>
                                            <?php }}?>
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-footer">
                            <div class="copy-right">Copyright &copy; 2025 Ro Care Services. All rights reserved.</div>
                        </div>
                    </div>
                    <div class="footer-img">
                        <figure class="footer-plumber-img">
                           <img src="<?=base_url("assets/uploads/footer/".$contactDetail['footer_image']);?>" alt="logo">
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>assets/admin/js/common.js"></script> 
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?=base_url()?>assets/home/vendors/jquery/jquery.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/waypoint/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/progressbar-fill-visible/js/progressBar.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/counterup/jquery.counterup.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/slick/slick.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendors/slick-nav/jquery.slicknav.js"></script>
    <script src="<?=base_url()?>assets/home/js/custom.js"></script>
    <script src="<?=base_url("assets/admin/page/enquiry.js")?>"></script>

<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'91bfe2c3d80a70e6',t:'MTc0MTI0MzQ3OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/f3b948d8acb8/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91bfe2c3d80a70e6","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"2aaac9563824454ba89abdea91540009","b":1}' crossorigin="anonymous"></script>




    <!-- product popup form -->
    <div class="modal fade" id="exampleModalproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Submit Your Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <h4 class="cheakout-title" id="productname"></h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="hidden" name="type" value="2">
                            <input type="hidden" name="productId" id="productId">

                    <input type="text" name="p_name" placeholder="Name">
                    <span class="message" id="msgpname"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="p_phone" placeholder="Phone Number">
                            <span class="message" id="msgpphone"></span>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group last-form-group">
                           <input type="email" name="p_email" placeholder="Email Address">
                           <span class="message" id="msgpemail"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                           <select name="p_state" id="p_state">
                                <option value="">--Select State--</option>
                                <?php $stateList = stateList();
                                if($stateList){
                                    foreach($stateList as $state){?>
                                <option value="<?= $state['id'];?>"><?= $state['state'];?></option>
                                <?php }}?>
                            </select>
                            <span class="message" id="msgpstate"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                           <select name="p_city" id="p_city">
                                <option value="">--Select City--</option>
                            </select>
                            <span class="message" id="msgpcity"></span>
                        </div>
                    </div>
                </div>
                <p>
                    <textarea rows="8" name="p_message" placeholder="Enter your message*"></textarea>
                        <span class="message" id="msgpmessage"></span>
                </p>
            
                <button class="button-round-primary section-btn" type="button" id="authenticateProduct">Submit</button>
        </div>
      </div>
    </div>
    </body>
</html>