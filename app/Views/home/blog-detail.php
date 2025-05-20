<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(<?= base_url();?>assets/img/plumbero-img40.jpg);">
                    <div class="container">
                        <div class="inner-banner-content col-lg-10 offset-lg-1">
                            <h1 class="inner-title"><?= $blog['heading'];?></h1>
                        </div>
                    </div>
                </div>
            </section>
           
            <section class="single-post-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 primary">
                            <div class="right-sidebar">
                                <!-- single blog post html start -->
                                <div class="single-content-wrap">
                                    <figure class="single-content-imgage figure-round-border">
                                        <img src="<?= base_url("assets/uploads/blog/".$blog['image']);?>" alt="blog">
                                    </figure>
                                    <h5>
                                        <?= $blog['heading'];?>
                                    </h5>
                                    <p>
                                        <?= $blog['description'];?>
                                    </p>
                                </div>
                                
                                <!-- divider line html -->
                                <div class="divider-line">
                                    <span class="st-line"></span>
                                </div>
                                <!-- post comment html -->
                                <div id="commentArea" class="comment-area">
                                    <h3 class="comment-title">Comments</h3>
                                    <div class="comment-area-inner">
                                        <ol>
                                            <li>
                                                <figure class="comment-thumb">
                                                    <img src="<?= base_url();?>assets/img/plumbero-img18.jpg" alt="">
                                                </figure>
                                                <?php if($blogCommentList){
                                                    foreach($blogCommentList as $blogComment){?>
                                                <div class="comment-content">
                                                    <div class="comment-header">
                                                        <h5 class="author-name"><?= $blogComment['name'];?></h5>
                                                        <span class="post-on">
                                                        <?= date("M d Y",strtotime($blogComment['date']));?>
                                                        </span>
                                                    </div>
                                                    <p><?= $blogComment['message'];?></p>
                                                    <a href="javascript:void(0)" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <?php }}?>
                                            </li>
                                            
                                        </ol>
                                        
                                    </div>
                                    <div id="replyForm" class="comment-form-wrap">
                                        
                                        <form class="comment-form">
                                            <p class="full-width">
                                                <input type="hidden" name="btype" value="5">
                                                <input type="hidden" name="blog_url" value="<?= $blog['heading_slug'];?>">
                                                <input type="hidden" name="blog_id" value="<?= $blog['id'];?>">
                                                <label>Comment*</label>
                                                <textarea rows="9" name="bcomment"></textarea>
                                                <span class="message" id="msgcomment"></span>
                                            </p>
                                            <p>
                                                <label>Name *</label>
                                                <input type="text" name="bname">
                                                <span class="message" id="msgbname"></span>
                                            </p>
                                            <p>
                                                <label>Email *</label>
                                                <input type="email" name="bemail">
                                                <span class="message" id="msgbemail"></span>
                                            </p>
                                            <p class="full-width">
                                            <button class="button-round-primary section-btn" type="button" id="blogEnquiry">Post comment</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 secondary">
                            <div class="sidebar">
                                
                                <aside class="widget widget_latest_post widget-post-thumb">
                                    <div class="text-center">
                                        <h6 class="widget-title-round-border">Recent Post</h6>
                                    </div>
                                    <ul>
                                        <?php if($blogList){
                                            foreach($blogList as $blog){?>
                                        <li>
                                            <figure class="post-thumb">
                                                <a href="<?= base_url();?>blog/<?= $blog['heading_slug'];?>"><img src="<?= base_url("assets/uploads/blog/".$blog['thumb_image']);?>" alt=""></a>
                                            </figure>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="<?= base_url();?>blog/<?= $blog['heading_slug'];?>"><?= $blog['heading'];?></a>
                                                </h6>
                                                <div class="entry-meta">
                                                    <span class="posted-on">
                                                        <a href="blog-archive.html">August 17, 2023</a>
                                                    </span>
                                                  
                                                </div>
                                            </div>
                                        </li>
                                        <?php }}?>
                                        
                                    </ul>
                                </aside>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</main>