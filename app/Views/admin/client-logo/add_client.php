<div class="page-header">
    <h3 class="page-title">Create Client Logo</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Client Logo</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Client Logo</li>
        </ol>
    </nav>
</div>
<div class='row'>
    <div class="col-12 grid-margin">
        <div class="card">
            <span id="msgsuccess"></span>
            <div class="card-body">

                <form class="form-sample">
                    <div class="row">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" id="image" class='form-control'
                                accept=".jpg,.png,.jpeg,.webp">
                            <div class='clearfix'></div>
                            <span class='message' id="msgimage"></span>
                        </div>
                    </div>
                    <button type="button" id="authenticateClientLogoCreate"
                        class="btn btn-primary mr-2 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url("assets/admin/page/client_logo.js?v=0.1") ?>"></script>