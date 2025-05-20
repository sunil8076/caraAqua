<div class="page-header">
    <h3 class="page-title">Edit page</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">page</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit page</li>
        </ol>
    </nav>
</div>
<div class='row'>
    <div class="col-12 grid-margin">
        <div class="card">
            <span id="msgsuccess"></span>
            <div class="card-body">
                <form class="form-sample">
                    <input type="hidden" name='id' name="id" value="<?php echo $page['id']; ?>" />
                   
                        <div class="row">


                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label> Meta Title </label>
                                    <textarea type="text" name="meta_title"
                                        class='form-control'><?php echo $page['meta_title']; ?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmeta_title"></span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label> Meta Description </label>
                                    <textarea type="text" name="meta_description"
                                        class='form-control'><?php echo $page['meta_description']; ?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmeta_description"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Og Image<img
                                            src="<?php echo base_url("assets/uploads/page/" . $page['og_image']); ?>"
                                            style='width:120px;'></label>
                                    <input type="file" name="og_image" id="og_image" class='form-control'
                                        accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgog_image"></span>
                                </div>
                            </div>
                        </div>
                  
                        <button type="button" id="authenticatePageUpdate"
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
<script src="<?= base_url("assets/admin/page/page.js") ?>"></script>