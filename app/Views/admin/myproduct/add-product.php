<div class="page-header">
    <h3 class="page-title">Add Product</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
        </ol>
    </nav>
</div>

<div class='row'>
    <div class="col-12 grid-margin">
        <div class="card">
            <span id="msgsuccess"></span>
            <div class="card-body">
                <form class="form-sample" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Product Section</legend>
                        <div class="row">
                            <!-- Product Name -->
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="product_name" id="product_name" class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgproduct_name"></span>
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" id="slug" class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgslug"></span>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" id="image" class='form-control'
                                        accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgimage"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="editor" class='form-control'></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgdescription"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Meta Info -->
                        <div class="row">
                            <!-- Meta Title -->
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <textarea name="meta_title" class='form-control'></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmeta_title"></span>
                                </div>
                            </div>

                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" class='form-control'></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmeta_description"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="form-group">
                                <label>og_image</label>
                                <input type="file" name="og_image" id="og_image" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                <div class='clearfix'></div>
                                <span class='message' id="msgog_image"></span>
                            </div>
                        </div>
            </div>
            </fieldset>

            <button type="button" id="authenticateAddProduct"
                class="btn btn-primary mr-2 float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Scripts -->
<script src="<?= base_url("assets/admin/page/myproduct.js") ?>"></script>
<script src="<?= base_url(); ?>assets/admin/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>