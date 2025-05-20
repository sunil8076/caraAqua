<div class="page-header">
    <h3 class="page-title">Edit Address</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Address</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Address</li>
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
                <legend>Address</legend>
                <div class="row">
                            <input type="hidden" name="id" value="<?= $addressData['id'];?>">
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea type="text" name="address" id="address" class='form-control'><?= $addressData['address'];?></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgaddress"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" id="country" class='form-control' value="<?= $addressData['country'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgcountry"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name="state" id="state" class='form-control' value="<?= $addressData['state'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgstate"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" id="city" class='form-control' value="<?= $addressData['city'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgcity"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" name="pincode" class='form-control' value="<?= $addressData['pincode'];?>">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgpincode"></span>
                                </div>
                            </div>
                    </div>
                </fieldset>
                        <button type="button" id="authenticateUpdateAddress"
                            class="btn btn-primary mr-2 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url("assets/admin/page/address.js") ?>"></script>