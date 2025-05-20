<div class="page-header">
            <h3 class="page-title">Product List</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Product</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product List</li>
                </ol>
            </nav>
        </div>
        <div class='row'>
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Product List</h4>
                        <a href="<?=base_url()?>admin/product/create-product" class="ml-auto badge badge-warning p-2">Create Product</a>
                      </div>
                      <p>&nbsp;</p>
                      <table Id="example" class="display table table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th scope="col" width="10%">#</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            if($productList){
                              $count=1;
                              foreach($productList as $product){ ?>
                          <tr>
                            <td data-label="#"><?= $count++;?></td>
                            <td data-label="heading"><?php echo $product['heading']?></td>
                            <td data-label="Action">
                                <a href="<?=base_url()?>admin/product/edit-product/<?php echo $product['id'];?>" class="ml-auto badge badge-warning p-2" ><i class="fa fa-pencil"></i></a>
                                <?php if($product['status']==1){?>
                              <a href="<?php echo base_url("admin/product/updateStatus/".$product['id']."/0");?>" class="badge badge-success p-2" style='background:green;' onclick="return confirm('Are you sure. You want to deactivate this?')"><i class="fa fa-check" aria-hidden="true"></i></a>
                              <?php }else{?>
                              <a href="<?php echo base_url("admin/product/updateStatus/".$product['id']."/1");?>" class="badge badge-danger p-2" onclick="return confirm('Are you sure. You want to activate this?')"><i class="fa fa-times" aria-hidden="true"></i></a>
                              <?php }?>
                              <a href="<?=base_url()?>admin/product/delete/<?php echo $product['id'];?>" class="ml-auto badge badge-warning p-2" onclick="return confirm('Are you sure. You want to delete this?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <?php } }else{echo "<tr><td colspan='3'>No Detail...</td></tr>"; } ?>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>
<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/responsive-table.css");?>">
<?php
if ($productList){?>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<?php }?>