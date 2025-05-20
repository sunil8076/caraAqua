<div class="page-header">
    <h3 class="page-title">Edit About</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">About</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit About</li>
        </ol>
    </nav>
</div>
<div class='row'>
    <div class="col-12 grid-margin">
        <div class="card">
            <span id="msgsuccess"></span>
            <div class="card-body">
            <form class="form-sample">
                            <input type="hidden" name="id" value="<?= $about['id'];?>">
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" name="heading" id="heading" class='form-control' value="<?= $about['heading'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgheading"></span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" name="description" id="editor" class='form-control'><?= $about['description'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgdescription"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Image <img src="<?= base_url("assets/uploads/about/".$about['image']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="image" id="image" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgimage"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Vision Heading</label>
                                    <input type="text" name="vision_heading" id="vision_heading" class='form-control' value="<?= $about['vision_heading'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgvision_heading"></span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label>Vision Description</label>
                                    <textarea type="text" name="vision_description" id="editor1" class='form-control'><?= $about['vision_description'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgvision_description"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Mission Heading</label>
                                    <input type="text" name="mission_heading" id="mission_heading" class='form-control' value="<?= $about['mission_heading'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmission_heading"></span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label>Mission Description</label>
                                    <textarea type="text" name="mission_description" id="editor2" class='form-control'><?= $about['mission_description'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgmission_description"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Image1 <img src="<?= base_url("assets/uploads/about/".$about['image1']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="image1" id="image1" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgimage1"></span>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="authenticateUpdateAbout"
                            class="btn btn-primary mr-2 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url("assets/admin/page/about.js") ?>"></script>
<script src="<?php echo base_url(); ?>assets/admin/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/ckeditor/samples/js/sample.js"></script>
<script>
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
</script>