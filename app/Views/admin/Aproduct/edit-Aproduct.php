<div class="page-header">
    <h3 class="page-title">Edit Product</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
        </ol>
    </nav>
</div>
<div class='row'>
    <div class="col-12 grid-margin">
        <div class="card">
            <span id="msgsuccess"></span>
            <div class="card-body">
            <form class="form-sample">
                    <fieldset>
                        <legend>Product Section</legend>
                        <div class="row" id="options-container">
                            <input type="hidden" name="id" value="<?= $product['id'];?>">
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label for="">Select Category</label>
                                    <select name="type" id="type" class='form-control'>
                                        <option value="">--Select Category--</option>
                                        <option value="1" <?php if($product['type']==1){echo "selected";}?>>Commercial</option>
                                        <option value="2" <?php if($product['type']==2){echo "selected";}?>>Domestic</option>
                                    </select>
                                    <span class="message" id="msgtype"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" name="heading" id="heading" class='form-control' value="<?= $product['heading'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgheading"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Heading Slug</label>
                                    <input type="text" name="heading_slug" id="heading_slug" class='form-control' value="<?= $product['heading_slug'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgheading_slug"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Thumb Image <img src="<?= base_url("assets/uploads/Aproduct/".$product['thumb_image']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="thumb_image" id="thumb_image" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgthumb_image"></span>
                                </div>
                            </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-group">
                                        <label>Image <img src="<?= base_url("assets/uploads/Aproduct/".$product['image']);?>" style="width:30px" alt=""></label>
                                        <input type="file" name="image" id="image" class='form-control'
                                            accept=".jpg,.png,.jpeg,.webp">
                                        <div class='clearfix'></div>
                                        <span class='message' id="msgimage"></span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-group">
                                        <label>Image1 <img src="<?= base_url("assets/uploads/Aproduct/".$product['image1']);?>" style="width:30px" alt=""></label>
                                        <input type="file" name="image1" id="image1" class='form-control'
                                            accept=".jpg,.png,.jpeg,.webp">
                                        <div class='clearfix'></div>
                                        <span class='message' id="msgimage1"></span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-group">
                                        <label>Image2 <img src="<?= base_url("assets/uploads/Aproduct/".$product['image2']);?>" style="width:30px" alt=""></label>
                                        <input type="file" name="image2" id="image2" class='form-control'
                                            accept=".jpg,.png,.jpeg,.webp">
                                        <div class='clearfix'></div>
                                        <span class='message' id="msgimage2"></span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-group">
                                        <label>Image3 <img src="<?= base_url("assets/uploads/Aproduct/".$product['image3']);?>" style="width:30px" alt=""></label>
                                        <input type="file" name="image3" id="image3" class='form-control'
                                            accept=".jpg,.png,.jpeg,.webp">
                                        <div class='clearfix'></div>
                                        <span class='message' id="msgimage3"></span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-group">
                                        <label>Image4 <img src="<?= base_url("assets/uploads/Aproduct/".$product['image4']);?>" style="width:30px" alt=""></label>
                                        <input type="file" name="image4" id="image4" class='form-control'
                                            accept=".jpg,.png,.jpeg,.webp">
                                        <div class='clearfix'></div>
                                        <span class='message' id="msgimage4"></span>
                                    </div>
                                </div>
                                <div id="hideprice">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label>MRP</label>
                                                <input type="text" name="mrp" id="mrp" class='form-control' value="<?= $product['mrp'];?>">
                                                <div class='clearfix'></div>
                                                <span class='message' id="msgmrp"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="price" id="price" class='form-control' value="<?= $product['price'];?>">
                                                <div class='clearfix'></div>
                                                <span class='message' id="msgprice"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <input type="text" name="category" id="category" class='form-control' value="<?= $product['category'];?>">
                                        <div class='clearfix'></div>
                                        <span class='message' id="msgcategory"></span>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-2">
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea type="text" name="content" class='form-control'><?= $product['content'];?></textarea>
                                        <div class='clearfix'></div>
                                        <span class='message' id="msgcontent"></span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-group">
                                        <label>Weight</label>
                                        <input type="text" name="weight" id="weight" class='form-control' value="<?= $product['weight'];?>">
                                        <div class='clearfix'></div>
                                        <span class='message' id="msgweight"></span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-group">
                                        <label>Dimension</label>
                                        <input type="text" name="dimension" id="dimension" class='form-control' value="<?= $product['dimension'];?>">
                                        <div class='clearfix'></div>
                                        <span class='message' id="msgdimension"></span>
                                    </div>
                                </div>
                               
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label>Short Description </label>
                                    <textarea type="text" name="short_description" class='form-control'><?= $product['short_description'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgshort_description"></span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label> Description </label>
                                    <textarea type="text" name="description" id="editor"
                                        class='form-control'><?= $product['description'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgdescription"></span>
                                </div>
                            </div>
                            
                            <?php if($tagList){
                                foreach($tagList as $tag){?>
                            <div class="col-md- mb-2">
                                <div class="form-group">
                                    <label>Tags</label>
                                    <input type="text" name="tag[]" id="tag" class='form-control' value="<?= $tag['tag'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgtag"></span>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                        <a href="#" id="add-more-options">Add More</a>
                    </fieldset>
                    <fieldset>
                        <legend>SEO</legend>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Og Image <img src="<?= base_url("assets/uploads/Aproduct/".$product['og_image']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="og_image" id="og_image" class='form-control'
                                        accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgog_image"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label> Meta Title </label>
                                    <textarea type="text" name="meta_title" class='form-control'><?= $product['meta_title'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmeta_title"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label> Meta Description </label>
                                    <textarea type="text" name="meta_description" class='form-control'><?= $product['meta_description'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmeta_description"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                        <button type="button" id="authenticateUpdateProduct"
                            class="btn btn-primary mr-2 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/admin/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/ckeditor/samples/js/sample.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
<script src="<?= base_url("assets/admin/page/Aproduct.js") ?>"></script>
