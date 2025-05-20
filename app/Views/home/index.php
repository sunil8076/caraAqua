
<main id="content" class="site-main">
            <!-- home banner section html start -->
            <section class="home-banner" style="background-image: url(assets/home/img/bg-3.jpg);background-position: center;background-size: cover;background-repeat: no-repeat;">
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="banner-left-detail">
                            <div class="banner-detail banner-section-head-white-info">
                                <h6 class="section-sub-title">
                                Welcome to 
                                </h6>
                                <h1 class="section-title">
                                   <?= $banner['heading'];?>
                                </h1>
                                <p class="banner-info section-paragraph">
                                <?= $banner['content'];?>
                                </p>
                                <a href="<?= base_url();?>about-us" class="button-round-primary btn btn-color">
                                LEARN MORE
                            </a>
                            </div>
                        </div>
                        <div class="banner-right-img">
                            <figure class="banner-img">
                                <img src="<?=base_url("assets/uploads/banner/".$banner['image']);?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <div class="banner-service-section">
                <div class="container">
                    <div class="banner-service-wrapper">
                        <aside class="banner-hire-detail">
                            <figure class="reverse-pipe-icon">
                               <div class="img-icon">
                                <img src="<?=base_url()?>assets/home/img/icons/appliance.png" alt="">
                               </div>
                            </figure>
                            <h5 class="hire-info"><?= $banner['content1'];?></h5>
                        </aside>
                        <aside class="banner-service-content round-border">
                            <figure class="enginer-icon">
                                <i aria-hidden="true" class="icon icon-engineer"></i>
                            </figure>
                            <h5>
                            <?= $banner['content2'];?>
                            </h5>
                            <a href="<?= base_url();?>contact-us" class="button-round-primary hire-btn">
                                HIRE US
                            </a>
                        </aside>
                    </div>
                </div>
            </div>
            
            <!-- home section service -->
            <section class="home-service-section">
                <div class="container">
                    <div class="service-detail-wrapper">
                        <div class="section-head">
                            <h6 class="section-sub-title">RO PURIFIER SERVICES</h6>
                            <h3 class="section-title"><?= $home['service_heading'];?></h3>
                        </div>
                        <p class="service-detail-paragraph">
                       <?= $home['service_content'];?>
                        </p>
                    </div>
                    <div class="type-of-service">
                        <div class="service-type cursor-default"  id="popupform" data-bs-toggle="modal" service-type="Water Treatment Plant">
                            <a href="javascript:void(0)" class="service-title">
                                <h5>
                                Water Treatment Plant
                                </h5>
                            </a>
                            <p class="service-info">
                            A water purifier is a device used to remove contaminants...
                            </p>
                            <div class="service-img-no d-flex justify-content-between align-items-end">
                                <figure class="service-img">
                                    <img src="<?=base_url()?>assets/home/img/icons/appliance.png" alt="">
                                </figure>
                                <h2 class="service-no">01.</h2>
                            </div>
                            <a href="#" class="service-type-btn">
                                <i aria-hidden="true" class="fas fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-type" id="popupform" data-bs-toggle="modal"  service-type="Waste Water Treatment Plant">
                            <a href="javascript:void(0)" class="service-title">
                                <h5>
                                Waste Water Treatment Plant
                                </h5>
                            </a>
                            <p class="service-info">
                            An RO (Reverse Osmosis) plant is a large-scale water...
                            </p>
                            <div class="service-img-no d-flex justify-content-between align-items-end">
                                <figure class="service-img">
                                    <img src="<?=base_url()?>assets/home/img/icons/air-purifier.png" alt="">
                                </figure>
                                <h2 class="service-no">02.</h2>
                            </div>
                            <a href="#" class="service-type-btn">
                                <i aria-hidden="true" class="fas fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-type" id="popupform" data-bs-toggle="modal"  service-type="Domestic Water Softener">
                            <a href="javascript:void(0)" class="service-title">
                                <h5>
                                Domestic Water Softener	
                                </h5>
                            </a>
                            <p class="service-info">
                            A water softener is a device used to remove minerals...
                            </p>
                            <div class="service-img-no d-flex justify-content-between align-items-end">
                                <figure class="service-img">
                                    <img src="<?=base_url()?>assets/home/img/icons/water-filter.png" alt="">
                                </figure>
                                <h2 class="service-no">03.</h2>
                            </div>
                            <a href="#" class="service-type-btn">
                                <i aria-hidden="true" class="fas fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-type" id="popupform" data-bs-toggle="modal"  service-type="Industrial Water Softener">
                            <a href="javascript:void(0)" class="service-title">
                                <h5>
                                Industrial Water Softener
                                </h5>
                            </a>
                            <p class="service-info">
                            A vacuum cleaner is a cleaning device that uses suction ...
                            </p>
                            <div class="service-img-no d-flex justify-content-between align-items-end">
                                <figure class="service-img">
                                    <img src="<?=base_url()?>assets/home/img/icons/vaccum-cleaner.png" alt="">
                                </figure>
                                <h2 class="service-no">04.</h2>
                            </div>
                            <a href="#" class="service-type-btn">
                                <i aria-hidden="true" class="fas fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-type" id="popupform" data-bs-toggle="modal"  service-type="Industrial RO Plant">
                            <a href="javascript:void(0)" class="service-title">
                                <h5>
                                Industrial RO Plant
                                </h5>
                            </a>
                            <p class="service-info">
                            A water dispenser is a device used to provide drinking water...
                            </p>
                            <div class="service-img-no d-flex justify-content-between align-items-end">
                                <figure class="service-img">
                                    <img src="<?=base_url()?>assets/home/img/icons/water-dispenser.png" alt="">
                                </figure>
                                <h2 class="service-no">05.</h2>
                            </div>
                            <a href="#" class="service-type-btn">
                                <i aria-hidden="true" class="fas fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-type" id="popupform" data-bs-toggle="modal"  service-type="Sewage Treatment Plant (STP)">
                            <a href="javascript:void(0)" class="service-title">
                                <h5>
                                Sewage Treatment Plant (STP)
                                </h5>
                            </a>
                            <p class="service-info">
                            A Water ATM is a machine designed to provide clean drinking water...
                            </p>
                            <div class="service-img-no d-flex justify-content-between align-items-end">
                                <figure class="service-img">
                                    <img src="<?=base_url()?>assets/home/img/icons/computer.png" alt="">
                                </figure>
                                <h2 class="service-no">06.</h2>
                            </div>
                            <a href="#" class="service-type-btn">
                                <i aria-hidden="true" class="fas fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-type" id="popupform" data-bs-toggle="modal"  service-type="Effluent Treatment Plant (ETP)">
                            <a href="javascript:void(0)" class="service-title">
                                <h5>
                                Effluent Treatment Plant (ETP)	
                                </h5>
                            </a>
                            <p class="service-info">
                            A water ionizer is a device that uses electrolysis to change the pH level of water...
                            </p>
                            <div class="service-img-no d-flex justify-content-between align-items-end">
                                <figure class="service-img">
                                    <img src="<?=base_url()?>assets/home/img/icons/appliance.png" alt="">
                                </figure>
                                <h2 class="service-no">07.</h2>
                            </div>
                            <a href="#" class="service-type-btn">
                                <i aria-hidden="true" class="fas fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-notification">
                            <h5 class="notifiy-title">We Are The Best In This RO Service Business Since 2004.</h5>
                            <a href="<?= base_url();?>contact-us" class="button-round-primary">HIRE US NOW</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home about us section -->
             
            <section class="commercial-section">
  <div class="container">
    <div class="section-head col-md-8 offset-md-2 text-center">
      <h6 class="section-sub-title">
        Product
      </h6>
      <h3 class="section-title">
        Our Product
      </h3>
    </div>
    <div class="row">
        <?php if($domesticproductList){
            foreach($domesticproductList as $domesticproduct){?>
        <div class="col-sm-2">
            <div class="product-item text-center">
            <figure class="product-image">
                <a href="<?= base_url();?>product/<?= $domesticproduct['heading_slug'];?>">
                <img src="<?= base_url("assets/uploads/product/".$domesticproduct['thumb_image']);?>" alt="">
                </a>
                <span class="onsale">Sale</span>
            </figure>
            <div class="product-content">
                <h5><?= $domesticproduct['heading'];?></h5>
                <div class="product-price">
                <!-- <del>₹?= $domesticproduct['mrp'];?></del>
                <ins>₹<= $domesticproduct['price'];?></ins> -->
                </div>
                <a href="<?= base_url();?>product/<?= $domesticproduct['heading_slug'];?>" class="button-round-primary">Read More</a>
            </div>
            </div>
        </div>
        <?php }}?>
    </div>
  </div>
</section>
            <section class="home-aboutus">
                <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                     <div class="about-img">
                     <img src="assets/home/img/about/about-img.jpg" alt="aboutimage">
                     </div>
                      </div>
                      <div class="col-md-6">
                                <div class="about-detail section-head-info">
                                    <h6 class="section-sub-title">
                                        INTRODUCTION OF US
                                    </h6>
                                    <h3 class="section-title">
                                       Know About Why We Are Best In Ro Service ! </h3>
                                    <p class="section-paragraph">
                                    Kara Aqua Water Treatment Company is a globally recognized, ISO 9001:2015, MSME, and CE-certified organization. As a trusted leader in the water treatment industry, the company specializes in manufacturing, exporting, trading, supplying, and providing spare parts and services for cutting-edge water treatment solutions. Their extensive product range includes Industrial RO Plants, Domestic and Industrial Water Softeners, Sewage Treatment Plants (STP), Effluent Treatment Plants (ETP), Sand Filters, and Activated Carbon Filters.
                                    </p>
                                    <a href="#" class="button-round-primary section-btn">READ MORE</a>
                                </div>
                            </div>
                    </div>
                    <!-- <div class="home-aboutus-inner">
                        
                         <div class="about-gallary">
                            <figure class=" figure-round-border">
                                <img src="<?=base_url("assets/uploads/home/".$home['about_image']);?>" alt="">
                            </figure>
                            <figure class=" figure-round-border">
                                <img src="<?=base_url("assets/uploads/home/".$home['about_image1']);?>" alt="">
                            </figure>
                            <figure class=" figure-round-border">
                                <img src="<?=base_url("assets/uploads/home/".$home['about_image2']);?>" alt="">
                            </figure>
                        </div> 
                       <div class="home-about-right">
                            <div class="about-content">
                                <figure class="about-top-right-img figure-round-border">
                                    <img src="<?=base_url("assets/uploads/home/".$home['about_image3']);?>" alt="">
                                </figure>
                                <div class="section-head-info">
                                    <h6 class="section-sub-title ">INTRODUCTION OF US</h6>
                                    <h3 class="section-title">
                                        <?= $home['about_heading'];?>
                                    </h3>
                                 
                                    <?= $home['about_description'];?>
                               
                                </div>
                            </div>
                            <div class="about-detail">
                                <figure class="about-bottom-right-img figure-round-border">
                                    <img src="<?=base_url("assets/uploads/home/".$home['about_image4']);?>" alt="">
                                </figure>
                                <div class="about-detail-inner">
                                 
                                    <a href="<?= base_url();?>about" class="button-round-primary section-btn">READ MORE</a>
                                </div>
                            </div>
                        </div> 
                    </div> -->
                </div>
            </section>
            <!-- home working process section -->
             
            <section class="home-blog-section">
                <div class="container">
                    <div class="section-head col-md-8 offset-md-2 text-center">
                        <h6 class="section-sub-title">
                        Product
                        </h6>
                        <h3 class="section-title">
                        Our Product
                        </h3>
                    </div>
                    
                    <div class="inner-blog-wrapper">
                    <?php if($productList){
                        foreach($productList as $product){?>
                        <article class="post round-border">
                            <figure class="feature-image">
                                <img src="<?=base_url("assets/uploads/product/".$product['thumb_image']);?>" alt="">
                                <span class="cat-meta">
                                    <a href="javascript:void(0)">Ro Services</a>
                                </span>
                            </figure>
                            <div class="entry-content">
                                <h5 class="blog-title">
                                    <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><?= $product['heading'];?>
                                    </a>
                                </h5>
                                <p class="blog-preview">
                                <?= $product['short_description'];?>
                                </p>
                                <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>" class=" section-btn">READ MORE</a>
                            </div>
                        </article>
                        
                        <?php }}?>
                    </div>
                </div>
            </section>
            <section class="home-working-step-section"style="background-image: url(assets/home/img/plumbero-img15.jpg);">>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-head-white offset-lg-3 col-lg-6 offset-md-2 col-md-8 text-center">
                        <h6 class="section-sub-title">WORK PROCESS</h6>
                        <h3 class="section-title"><?= $home['work_heading'];?></h3>
                    </div>
                    <div class="process-step">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="icon icon-Profile"></i>
                                        <h5 class="phase-no">1</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                        <?= $home['work_heading1'];?>
                                        </h5>
                                        <p class="phase-info">
                                        <?= $home['work_content1'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="icon icon-Document-Search"></i>
                                        <h5 class="phase-no">2</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                        <?= $home['work_heading2'];?>
                                        </h5>
                                        <p class="phase-info">
                                        <?= $home['work_content2'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="icon icon-Mechanic"></i>
                                        <h5 class="phase-no">3</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                        <?= $home['work_heading3'];?>
                                        </h5>
                                        <p class="phase-info">
                                        <?= $home['work_content3'];?> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="icon icon-badge"></i>
                                        <h5 class="phase-no">4</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                        <?= $home['work_heading4'];?>
                                        </h5>
                                        <p class="phase-info">
                                        <?= $home['work_content4'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home appointment section -->
            <section class="home-appointment-section">
                <div class="container">
                    <div class="reservation-inner ">
                        <figure class="reservation-section">
                            <div class="video-button">
                                <a id="video-container" data-video-id="IUN664s7N-c">
                                    <i aria-hidden="true" class="icon icon-play-button"></i>
                                </a>
                            </div>
                        </figure>
                        <div class="reservation-content">
                            <div class="section-head">
                                <h6 class="section-sub-title">APPLY FOR APPOINTMENT</h6>
                                <h4 class="service-title">Top Rated By Customers & Servicing Firm With 100% Result</h4>
                            </div>
                            <form class="reservation-form row">
                                <input type="hidden" name="a_type" value="3">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-1 form-group">
                                    <input type="text" name="a_name" id="name" placeholder="Your Name..">
                                    <span class="message" id="msganame"></span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-1 form-group">
                                    <input type="email" name="a_email" id="email" placeholder="Your Email Address..">
                                    <span class="message" id="msgaemail"></span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-1 form-group">
                                    <input type="text" name="a_subject" id="subject" placeholder="Your Subject..">
                                    <span class="message" id="msgasubject"></span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-1 form-group">
                                    <button type="button" class="button-round-primary" id="ApointmentEnquiry">APPLY FOR APOINTMENT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
              <!-- ----ayua-section----- -->
              <!-- <section class="about-section">
  <div class="container">
    <div class="row clearfix">

     
      <div class="content-column col-md-4 col-sm-12 col-xs-12">
        <div class="inner-column">
          <div class="sec-title">
            <div class="title">Water Treatment Company</div>
            <h2>Kara Aqua </h2>
          </div>
         
        <div class="content-aqua">
        <button type="submit" class="button-round-primary">APPLY FOR APOINTMENT</button>
        </div>
        </div>
      </div>

      <div class="image-column col-md-8 col-sm-12 col-xs-12">
        <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="image">
            <img src="https://i.ibb.co/vQbkKj7/about.jpg" alt="">
            <div class="overlay-box">
              <div class="year-box"><span class="number">5</span>Years <br> Experience <br> Working</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section> -->
<!-- ---end-aqua-section--- -->
<section class="home-certified-section"style="background-image: url(assets/home/img/bg-2.jpg);background-position: center;background-size: cover;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        <div class="img">
                                <img src="<?= base_url();?>assets/home/img/about/serv-2.png" alt="#">
                            </div>
                        </div>
                        <div class="col-md-8">
                       
                            <div class="section-head certified-section">
                                <h6 class="section-sub-title">Water Treatment Company</h6>
                                <h3 class="section-title">Kara Aqua</h3>
                                
                            </div>
                            <div class="btn-certified">
                            <button type="submit" class="button-round-primary"style="border-radius: 10px;padding: 16px 58px;margin-left: 5px;">ISO 9001:2015</button> 
                           
                            <button type="submit" class="button-round-primary"style="border-radius: 10px;    padding: 16px 58px;">GMP Certified</button> 
                          
                            <button type="submit" class="button-round-primary"style="border-radius: 10px;    padding: 16px 58px;">MSME Certified</button> 
                            </div>
                          
                            </div>
                       
                        </div>
                    </div>
            </section>
          
            <!-- home gallay sectin -->
            <section class="home-gallery-section">
                <div class="container">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-head text-center">
                            <h6 class="section-sub-title">PORTFOLIO LIST</h6>
                            <h3 class="section-title">
                                Recent Completed Activity
                            </h3>
                        </div>
                    </div>
                    <div class="gallery-container">
                        <div class="gallery-grid">
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-2.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-6.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-4.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-3.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-5.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-1.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home-team-section -->
           
            <!-- <section class="home-team-section">
                <div class="container">
                    <div class="section-head col-md-6 offset-md-3 text-center">
                        <h6 class="section-sub-title">TEAM MEMBERS</h6>
                        <h3 class="section-title">
                            Meet Our Experts
                        </h3>
                    </div>
                    <div class="team-inner-group">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="<?=base_url()?>assets/home/img/plumbero-img52.jpg" alt="">
                                    </figure>
                                    <div class="team-detail round-border">
                                        <a href="team-deatil.html" class="team-name">
                                            <h5>George Harry</h5>
                                        </a>
                                        <span class="job-title">HEAD TECHNICIAN</span>
                                        <a href="team-deatil.html" class="team-type-btn">
                                            <i aria-hidden="true" class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="<?=base_url()?>assets/home/img/plumbero-img53.jpg" alt="">
                                    </figure>
                                    <div class="team-detail round-border">
                                        <a href="team-deatil.html" class="team-name">
                                            <h5>Jason William</h5>
                                        </a>
                                        <span class="job-title">HEAD TECHNICIAN</span>
                                        <a href="team-deatil.html" class="team-type-btn">
                                            <i aria-hidden="true" class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="<?=base_url()?>assets/home/img/plumbero-img54.jpg" alt="">
                                    </figure>
                                    <div class="team-detail round-border">
                                        <a href="team-deatil.html" class="team-name">
                                            <h5>Garry Smith</h5>
                                        </a>
                                        <span class="job-title">HEAD TECHNICIAN</span>
                                        <a href="team-deatil.html" class="team-type-btn">
                                            <i aria-hidden="true" class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="<?=base_url()?>assets/home/img/plumbero-img55.jpg" alt="">
                                    </figure>
                                    <div class="team-detail round-border">
                                        <a href="team-deatil.html" class="team-name">
                                            <h5>Sammy Hobbs</h5>
                                        </a>
                                        <span class="job-title">HEAD TECHNICIAN</span>
                                        <a href="team-deatil.html" class="team-type-btn">
                                            <i aria-hidden="true" class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- home testimonial section -->
            <section class="home-testimonials-section"style="background-image: url(assets/home/img/plumbero-img15.jpg);">>
                <div class="overlay"></div>
                <div class="container">
                    <div class="home-testimonial-wrapper">
                        <div class="section-head-white-info">
                            <h6 class="section-sub-title">
                                OUR TESTIMONIAL
                            </h6>
                            <h3 class="section-title">
                                Appreciated By Our Customers
                            </h3>
                            <p class="section-paragraph">
                              I’ve been using Kara’s RO system for over a year now, and I couldn’t be happier! The installation was quick, and the system works flawlessly.
                            </p>
                            <a href="#" class="button-round-secondary section-btn">
                                VIEW ALL REVIEWS
                            </a>
                        </div>
                        <div class="comment-inner">
                            <?php if($testimonialList){
                                foreach($testimonialList as $key=> $testimonial){
                                   if($key%2==0){?>
                            <div class="comment-group left-group">
                                <div class="comment-content round-border">
                                    <p class="comment-detail">
                                    <?= $testimonial['content'];?>
                                    </p>
                                    <div class="author-detail">
                                        <figure class="author-img">
                                        <img src="<?=base_url("assets/uploads/testimonial/".$testimonial['image']);?>" alt="">
                                        </figure>
                                        <div class="author-info">
                                            <h5 class="author-name"><?= $testimonial['name'];?></h5>
                                            <span class="author-desc">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{?>
                            <div class="comment-group right-group">
                                <div class="comment-content round-border">
                                    <p class="comment-detail">
                                    <?= $testimonial['content'];?>
                                    </p>
                                    <div class="author-detail">
                                        <figure class="author-img">
                                        <img src="<?=base_url("assets/uploads/testimonial/".$testimonial['image']);?>" alt="">
                                        </figure>
                                        <div class="author-info">
                                            <h5 class="author-name"><?= $testimonial['name'];?></h5>
                                            <span class="author-desc"><?= $testimonial['designation'];?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }}}?>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- home partner section html -->
            <section class="home-partner-section">
                <div class="container">
                    <div class="home-partner-wrapper">
                        <div class="partner-group-logo">
                            <?php if($logoList){
                                foreach($logoList as $logo){?>
                            <figure class="partner-logo round-border">
                                <img src="<?=base_url("assets/uploads/clientlogo/".$logo['image']);?>" alt="">
                            </figure>
                            <?php }}?>
                        </div>
                        <div class="section-head-info partner-content">
                            <h6 class="section-sub-title">PARTNERS & CLIENTS</h6>
                            <h3 class="section-title"><?= $home['partner_heading'];?></h3>
                            <p class="section-paragraph">
                            <?= $home['partner_description'];?>
                            </p>
                            <a href="#" class="button-round-primary section-btn">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>