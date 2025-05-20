<div class="page-header">
            <h3 class="page-title">Testimonial List</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Testimonial</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Testimonial List</li>
                </ol>
            </nav>
        </div>
        <div class='row'>
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Testimonial List</h4>
                      </div>
                      <p>&nbsp;</p>
                      <table Id="example" class="display table table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th scope="col" width="10%">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            if($testimonialList){
                              $count=1;
                              foreach($testimonialList as $testimonial){ ?>
                          <tr>
                            <td data-label="#"><?= $count++;?></td>
                            <td data-label="name"><?php echo $testimonial['name']?></td>
                            <td data-label="Action">
                                <a href="<?=base_url()?>admin/testimonial/edit-testimonial/<?php echo $testimonial['id'];?>" class="ml-auto badge badge-warning p-2" ><i class="fa fa-pencil"></i></a>
                                <?php if($testimonial['status']==1){?>
                              <a href="<?php echo base_url("admin/testimonial/updateStatus/".$testimonial['id']."/0");?>" class="badge badge-success p-2" style='background:green;' onclick="return confirm('Are you sure. You want to deactivate this?')"><i class="fa fa-check" aria-hidden="true"></i></a>
                              <?php }else{?>
                              <a href="<?php echo base_url("admin/testimonial/updateStatus/".$testimonial['id']."/1");?>" class="badge badge-danger p-2" onclick="return confirm('Are you sure. You want to activate this?')"><i class="fa fa-times" aria-hidden="true"></i></a>
                              <?php }?>
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
if ($testimonialList){?>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<?php }?>