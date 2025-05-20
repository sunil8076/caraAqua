<div class="page-header">
    <h3 class="page-title">Create Address</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Address</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Address</li>
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
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea type="text" name="address" class='form-control'></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgaddress"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgcountry"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name="state" class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgstate"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgcity"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" name="pincode" class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgpincode"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                        <button type="button" id="authenticateCreateAddress"
                            class="btn btn-primary mr-2 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url("assets/admin/page/address.js?v=0.1") ?>"></script>