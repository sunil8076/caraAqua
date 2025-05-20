<div class="page-header">
    <h3 class="page-title">Edit Contact Detail</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Contact Detail</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Contact Detail</li>
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
                    <legend>Phone</legend>
                    <div class="row">
                            <input type="hidden" name="id" value="<?= $contactData['id'];?>">
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Phone1</label>
                                    <input type="text" name="phone1" id="phone1" class='form-control' value="<?= $contactData['phone1'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgphone1"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Phone2</label>
                                    <input type="text" name="phone2" id="phone2" class='form-control' value="<?= $contactData['phone2'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgphone2"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Email</legend>
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Email1</label>
                                    <input type="text" name="email1" id="email1" class='form-control' value="<?= $contactData['email1'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgemail1"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Email2</label>
                                    <input type="text" name="email2" id="email2" class='form-control' value="<?= $contactData['email2'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgemail2"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Social Media</legend>
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Facebook Url</label>
                                    <textarea type="text" name="facebook_url" id="facebook_url" class='form-control'><?= $contactData['facebook_url'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgfacebook_url"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Twitter Url</label>
                                    <textarea type="text" name="twitter_url" id="twitter_url" class='form-control'><?= $contactData['twitter_url'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgtwitter_url"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Instagram Url</label>
                                    <textarea type="text" name="instagram_url" id="instagram_url" class='form-control'><?= $contactData['instagram_url'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msginstagram_url"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Youtube Url</label>
                                    <textarea type="text" name="youtube_url" id="youtube_url" class='form-control'><?= $contactData['youtube_url'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgyoutube_url"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Footer Image</legend>
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Footer Image <img src="<?= base_url("assets/uploads/footer/".$contactData['footer_image']);?>" style="width:30px" alt=""></label>
                                    <input type="file" name="footer_image" id="footer_image" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgfooter_image"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                        <button type="button" id="authenticateUpdateContactDetail"
                            class="btn btn-primary mr-2 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url("assets/admin/page/contact-detail.js") ?>"></script>