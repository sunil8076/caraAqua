<div class="page-header">
    <h3 class="page-title">Edit Home</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Home</li>
        </ol>
    </nav>
</div>
<div class='row'>
    <div class="col-12 grid-margin">
        <div class="card">
            <span id="msgsuccess"></span>
            <div class="card-body">
            <form class="form-sample">
                            <input type="hidden" name="id" value="<?= $home['id'];?>">
                            
                      
                    <fieldset>
                        <legend>Box1</legend>
                        <div class="row">
                        <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Service Heading</label>
                                    <input type="text" name="service_heading" id="service_heading" class='form-control' value="<?= $home['service_heading'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgservice_heading"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Service Content</label>
                                    <textarea type="text" name="service_content" id="service_content" class='form-control'><?= $home['service_content'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgservice_content"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>About Heading</label>
                                    <input type="text" name="about_heading" id="about_heading" class='form-control' value="<?= $home['about_heading'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgabout_heading"></span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label>About Description</label>
                                    <textarea type="text" name="about_description" id="editor" class='form-control'><?= $home['about_description'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgabout_description"></span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label>About Description1</label>
                                    <textarea type="text" name="about_description1" id="editor1" class='form-control'><?= $home['about_description1'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgabout_description1"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>About Image <img src="<?= base_url("assets/uploads/home/".$home['about_image']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="about_image" id="about_image" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgabout_image"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>About Image1 <img src="<?= base_url("assets/uploads/home/".$home['about_image1']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="about_image1" id="about_image1" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgabout_image1"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>About Image2 <img src="<?= base_url("assets/uploads/home/".$home['about_image2']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="about_image2" id="about_image2" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgabout_image2"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>About Image3 <img src="<?= base_url("assets/uploads/home/".$home['about_image3']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="about_image3" id="about_image3" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgabout_image3"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>About Image4 <img src="<?= base_url("assets/uploads/home/".$home['about_image4']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="about_image4" id="about_image4" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgabout_image4"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Box2</legend>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Work Heading</label>
                                    <input type="text" name="work_heading" id="work_heading" class='form-control' value="<?= $home['work_heading'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgwork_heading"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Work Heading1</label>
                                    <input type="text" name="work_heading1" id="work_heading1" class='form-control' value="<?= $home['work_heading1'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgwork_heading1"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Work Content1</label>
                                    <textarea type="text" name="work_content1" id="work_content1" class='form-control'><?= $home['work_content1'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgwork_content1"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Work Heading2</label>
                                    <input type="text" name="work_heading2" id="work_heading2" class='form-control' value="<?= $home['work_heading2'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgwork_heading2"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Work Content2</label>
                                    <textarea type="text" name="work_content2" id="work_content2" class='form-control'><?= $home['work_content2'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgwork_content2"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Work Heading3</label>
                                    <input type="text" name="work_heading3" id="work_heading3" class='form-control' value="<?= $home['work_heading3'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgwork_heading3"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Work Content3</label>
                                    <textarea type="text" name="work_content3" id="work_content3" class='form-control'><?= $home['work_content3'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgwork_content3"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Work Heading4</label>
                                    <input type="text" name="work_heading4" id="work_heading4" class='form-control' value="<?= $home['work_heading4'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgwork_heading4"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Work Content4</label>
                                    <textarea type="text" name="work_content4" id="work_content4" class='form-control'><?= $home['work_content4'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgwork_content4"></span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label>Partner Heading</label>
                                    <input type="text" name="partner_heading" id="partner_heading" class='form-control' value="<?= $home['partner_heading'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgpartner_heading"></span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label>Partner Description</label>
                                    <textarea type="text" name="partner_description" id="editor2" class='form-control'><?= $home['partner_description'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgpartner_description"></span>
                                </div>
                            </div>

                        </div>
                    </fieldset>
                        <button type="button" id="authenticateUpdateHome"
                            class="btn btn-primary mr-2 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url("assets/admin/page/home.js") ?>"></script>
<script src="<?php echo base_url(); ?>assets/admin/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/ckeditor/samples/js/sample.js"></script>
<script>
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
</script>