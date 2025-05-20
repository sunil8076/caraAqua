<div class="page-header">
    <h3 class="page-title">Edit Blog</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
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
                        <input type="hidden" name='id' value="<?php echo $blog['id']; ?>" />
                        <div class="row">
                            <div class="form-group">
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" name="heading" value="<?= $blog["heading"];?>"
                                        class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgheading"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Heading(Slug)</label>
                                    <input type="text" name="heading_slug" value="<?= $blog["heading_slug"];?>"
                                        class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgheading_slug"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Image <img
                                            src="<?php echo base_url("assets/uploads/blog/" . $blog['image']); ?>"
                                            style='width:50px;' /></label>
                                    <input type="file" name="image" id="image" class='form-control'
                                        accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgimage"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label> Thumb Image <img
                                            src="<?php echo base_url("assets/uploads/blog/" . $blog['thumb_image']); ?>"
                                            style='width:50px;' /></label>
                                    <input type="file" name="thumb_image" id="thumb_image" class='form-control'
                                        accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgthumb_image"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Blog Date</label>
                                    <input type="date" name="blog_date" id="blog_date" class='form-control'
                                        value="<?= $blog["blog_date"] ?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgblog_date"></span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea type="text" name="short_description"
                                        id="short_description"
                                        class='form-control'><?php echo $blog['short_description']; ?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgshort_description"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="editor" placeholder="Enter Description"
                                        class='form-control'
                                        style="height:100px;"><?= $blog["description"] ?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgdescription"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>SEO</legend>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label>Og Image<img
                                            src="<?php echo base_url("assets/uploads/blog/" . $blog['og_image']); ?>"
                                            style='width:120px;'></label>
                                    <input type="file" name="og_image" id="og_image" class='form-control'
                                        accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msog_image"></span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <textarea type="text" name="meta_title" id="meta_title"
                                        class='form-control'><?php echo $blog['meta_title']; ?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmeta_title"></span>
                                </div>
                            </div>

                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea type="text" name="meta_description" id="meta_description"
                                        class='form-control'><?php echo $blog['meta_description']; ?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmeta_description"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                        <button type="button" id="authenticateBlogUpdate"
                            class="btn btn-primary mr-2 float-right">Update</button>
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
<script src="<?= base_url("assets/admin/page/blog.js?v=0.2") ?>"></script>