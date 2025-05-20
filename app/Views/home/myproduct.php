<main id="content" class="site-main">
            <div class="product-outer-wrap product-wrap bg-gray single-product-wrapp">
                <div class="product-inner-wrap bg-gray">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="product-thumbnails-outer">
                                    <div class="sale-tag">sale!</div>
                                    <div class="product-thumbnails">
                                        <?php if($product['image']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image']);?>" alt="">
                                            </figure>
                                            
                                            <div class="image-search-icon">
                                                <a href="<?= base_url("assets/uploads/product/".$product['image']);?>" data-fancybox="gallery">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <?php if($product['image1']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image1']);?>" alt="">
                                            </figure>
                                            <div class="image-search-icon">
                                                <a href="<?= base_url("assets/uploads/product/".$product['image1']);?>" data-fancybox="gallery">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <?php if($product['image2']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image2']);?>" alt="">
                                            </figure>
                                            <div class="image-search-icon">
                                                <a href="<?= base_url("assets/uploads/product/".$product['image2']);?>" data-fancybox="gallery">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <?php if($product['image3']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image3']);?>" alt="">
                                            </figure>
                                            <div class="image-search-icon">
                                                <a href="<?= base_url("assets/uploads/product/".$product['image3']);?>" data-fancybox="gallery">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <?php if($product['image4']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image4']);?>" alt="">
                                            </figure>
                                            <div class="image-search-icon">
                                                <a href="<?= base_url("assets/uploads/product/".$product['image4']);?>" data-fancybox="gallery">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <div class="product-thumb-nav">
                                    <?php if($product['image1']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image']);?>" alt="">
                                            </figure>
                                        </div>
                                        <?php }?>
                                        <?php if($product['image1']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image1']);?>" alt="">
                                            </figure>
                                        </div>
                                        <?php }?>
                                        <?php if($product['image2']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image2']);?>" alt="">
                                            </figure>
                                        </div>
                                        <?php }?>
                                        <?php if($product['image3']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image3']);?>" alt="">
                                            </figure>
                                        </div>
                                        <?php }?>
                                        <?php if($product['image4']){?>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="<?= base_url("assets/uploads/product/".$product['image4']);?>" alt="">
                                            </figure>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-7">
                                <div class="product-summary">
                                    <h2 class="product-title-name"><?= $product['heading'];?></h2>
                                    <?php /*?>
                                    <div class="product-price">
                                        <del>₹<?= $product['mrp'];?></del>
                                        <ins>₹<?= $product['price'];?></ins>
                                    </div>
                                    <form class="cart-item">
                                        <!-- <input type="number" name="quantity" value="1"> -->
                                        <button type="button" class="btn button-round-secondary section-btn" data-bs-target="#exampleModalproduct" product-id="<?= $product['id'];?>" id="productpopupform">
                                    Get A Quote 
                                  </button>
                                    </form>
                                    <?php */?>
                                    <div class="product-meta">
                                        <div class="cat-detail">
                                            <strong>Category:</strong>
                                            <a href="#"><?= $product['category'];?></a>
                                        </div>
                                        <div class="tag-detail">
                                            <strong>Tags:</strong>
                                            <?php if($tagList){
                                                foreach($tagList as $tag){?>
                                            <a href="#"><?= $tag['tag'];?></a>
                                            <?php }}?>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <p><?= $product['content'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-outer">
                    <div class="container">
                        <div class="row">
                            <div class=" col-lg-8 right-sidebar">
                                <div class="tab-container">
                                    <div class="responsive-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">
                                                    Description
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">
                                                    Additional information
                                                </a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab" role="tab">
                                                    Requirement
                                                </a>
                                            </li> -->
                                        </ul>
                                        <div id="nav-tab-content" class="tab-content" role="tablist">
                                            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                                                <div class="card-header" role="tab" id="heading-A">
                                                    <h5 class="mb-0">
                                                        <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                                            Description
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-A">
                                                    <div class="card-body">
                                                        <h5>Description</h5>
                                                        <p>
                                                        <?= $product['description'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                                                <div class="card-header" role="tab" id="heading-B">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                                        Our Models
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-B">
                                                    <div class="card-body">
                                                        <table>
                                                            <tr>
                                                                <th>Weight</th>
                                                                <td><?= $product['weight'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Dimensions</th>
                                                                <td><?= $product['dimension'];?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                                                <div class="card-header" role="tab" id="heading-C">
                                                    <h5 class="mb-0">
                                                        <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
                                                            Review
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-C">
                                                    <div class="card-body">
                                                        <div class="comment-area">
                                                            <h3 class="comment-title">1 Reviews</h3>
                                                            <div class="comment-area-inner">
                                                                <ol>
                                                                    <li>
                                                                        <figure class="comment-thumb">
                                                                            <img src="assets/img/plumbero-img19.jpg" alt="">
                                                                        </figure>
                                                                        <div class="comment-content">
                                                                            <div class="comment-header">
                                                                                <h5 class="author-name">Jaan Smith</h5>
                                                                                <span class="post-on">Jana 10 2020</span>
                                                                                <div class="rating-wrap">
                                                                                    <div class="rating-start" title="Rated 5 out of 5">
                                                                                        <span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                                                            <a href="#replyForm" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                                        </div>
                                                                    </li>
                                                                </ol>
                                                            </div>
                                                            <div id="replyForm" class="comment-form-wrap">
                                                                <h2 class="comment-title">Leave a Review</h2>
                                                                <p>Your email address will not be published. Required fields are marked *</p>
                                                                <form class="comment-form">
                                                                    <div class="rate-wrap">
                                                                        <label>Your rating</label>
                                                                        <div class="procduct-rate">
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                    <p>
                                                                        <label>Your review *</label>
                                                                        <textarea rows="6"></textarea>
                                                                    </p>
                                                                    <p>
                                                                        <label>Name *</label>
                                                                        <input type="text" name="name">
                                                                    </p>
                                                                    <p>
                                                                        <label>Email *</label>
                                                                        <input type="email" name="email">
                                                                    </p>
                                                                    <p class="aggrement-tick">
                                                                        <input type="checkbox" name="tick">
                                                                        <label>Save my name, email, and website in this browser for the next time I comment.</label>
                                                                    </p>
                                                                    <p>
                                                                        <input type="submit" name="submit" value="Submit">
                                                                    </p>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="related-title">
                                        <h4>Related Products</h4>
                                    </div>
                                    <div class="row">
                                        <?php $productList = productList(4);
                                         if($productList){
                                            foreach($productList as $product){?>
                                        <div class="col-md-3">
                                            <div class="product-item text-center">
                                                <figure class="product-image">
                                                    <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>">
                                                        <img src="<?= base_url("assets/uploads/product/".$product['thumb_image']);?>" alt="">
                                                    </a>
                                                </figure>
                                                <div class="product-content">
                                                    <h5>Commercial RO Plant</h5>
                                                    <?php /*?>
                                                    <div class="product-price">
                                                        <ins>₹<?= $product['price'];?></ins>
                                                    </div>
                                                    <?php */?>
                                                    <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>" class="button-round-primary">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }}?>
                                        <!-- <div class="col-sm-6">
                                            <div class="product-item text-center">
                                                <figure class="product-image">
                                                    <a href="product-detail.html">
                                                        <img src="assets/home/img/product/prod-1.jpg" alt="">
                                                    </a>
                                                    <span class="onsale">Sale</span>
                                                </figure>
                                                <div class="product-content">
                                                    <h5>Industrial RO Plant</h5>
                                                    <div class="product-price">
                                                        <del>$225.00</del>
                                                        <ins>$210.00</ins>
                                                    </div>
                                                    <a href="product-cart.html" class="button-round-primary">Add to cart</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="sidebar">
                                    <aside class="widget widget_product_post widget-product-thumb">
                                    <div class="text-center">
                                        <h6 class="widget-title-round-border btn btn-color">Recent Product</h6>
                                    </div>
                                    <ul>
                                        <?php 
                                        $productList = productList(5);
                                        if($productList){
                                            foreach($productList as $product){?>
                                        <li>
                                            <figure class="product-thumb">
                                            <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>">
                                                    <img src="<?= base_url("assets/uploads/product/".$product['thumb_image']);?>" alt="product-img">
                                            </a>
                                            </figure>
                                            <div class="product-content">
                                                <h6>
                                                    <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><?= $product['heading'];?></a>
                                                </h6>
                                                <div class="entry-meta">
                                                    <span class="byline">
                                                        <a href="javascript:void(0)">Ro Service</a>
                                                    </span>
                                                    <span class="posted-on">
                                                        <a href="javascript:void(0)"><?= date("M d, Y", strtotime($product['date']));?></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php }}?>
                                        <!-- <li>
                                            <figure class="product-thumb">
                                            <a href="product-detail.html">
                                                    <img src="assets/home/img/product/prod-3.jpg" alt="product-img">
                                                </a>
                                            </figure>
                                            <div class="product-content">
                                                <h6>
                                                    <a href="product-detail.html">Commercial RO Plant</a>
                                                </h6>
                                                <div class="entry-meta">
                                                    <span class="byline">
                                                        <a href="product-archive.html">Ro Service</a>
                                                    </span>
                                                    <span class="posted-on">
                                                        <a href="product-archive.html">August 17, 2024</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class="product-thumb">
                                            <a href="product-detail.html">
                                                    <img src="assets/home/img/product/prod-1.jpg" alt="product-img">
                                                </a>
                                            </figure>
                                            <div class="product-content">
                                                <h6>
                                                    <a href="product-detail.html">Industrial RO Plant</a>
                                                </h6>
                                                <div class="entry-meta">
                                                    <span class="byline">
                                                        <a href="product-archive.html">Ro Service</a>
                                                    </span>
                                                    <span class="posted-on">
                                                        <a href="product-archive.html">August 17, 2024</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </li> -->
                                    </ul>
                                </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product section html end -->
        </main>
