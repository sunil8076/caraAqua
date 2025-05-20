<div class="page-header">
    <h3 class="page-title">Edit Banner</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Banner</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Banner</li>
        </ol>
    </nav>
</div>
<div class='row'>
    <div class="col-12 grid-margin">
        <div class="card">
            <span id="msgsuccess"></span>
            <div class="card-body">
            <form class="form-sample">
                            <input type="hidden" name="id" value="<?= $banner['id'];?>">
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" name="heading" id="heading" class='form-control' value="<?= $banner['heading'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgheading"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea type="text" name="content" id="content" class='form-control'><?= $banner['content'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgcontent"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Content1</label>
                                    <textarea type="text" name="content1" id="content1" class='form-control'><?= $banner['content1'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgcontent1"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Content2</label>
                                    <textarea type="text" name="content2" id="content2" class='form-control'><?= $banner['content2'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgcontent2"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Image <img src="<?= base_url("assets/uploads/banner/".$banner['image']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="image" id="image" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgimage"></span>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="authenticateUpdateBanner"
                            class="btn btn-primary mr-2 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url("assets/admin/page/banner.js") ?>"></script>
