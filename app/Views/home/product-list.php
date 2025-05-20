
        <main id="content" class="site-main">
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(assets/img/plumbero-img40.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title">product</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="product-outer-wrap product-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 right-sidebar">
                            <!-- <div class="product-notices-wrapper">
                                <p class="product-result-count">Showing all 6 results</p>
                                <form method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </div> -->
                            <div class="product-item-wrapper">
                                <div class="row">
                                    <?php if($productList){
                                        foreach($productList as $product){?>
                                    <div class="col-sm-3">
                                        <div class="product-item text-center">
                                            <figure class="product-image">
                                                <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>">
                                                    <img src="<?= base_url("assets/uploads/product/".$product['thumb_image']);?>" alt="product-img">
                                                </a>
                                                <span class="onsale">Sale</span>
                                            </figure>
                                            <div class="product-content">
                                                <h5><?= $product['heading'];?></h5>
                                                <?php /*?>
                                                <div class="product-price">
                                                    <del>₹<?= $product['mrp'];?></del>
                                                    <ins>₹<?= $product['price'];?></ins>
                                                </div>
                                                <?php */?>
                                                <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>" class="button-round-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
      