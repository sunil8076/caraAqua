<div class="page-header">
            <h3 class="page-title">Page List</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Page</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Page List</li>
                </ol>
            </nav>
        </div>
        <div class='row'>
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                      <div class="mb-4">
                        <h4 class="card-title mb-sm-0">Page List</h4>
                      </div>
                      <p>&nbsp;</p>
                      <table Id="example" class="display table table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th scope="col" width="10%">#</th>
                            <th scope="col">Page</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            if($pageList){
                              foreach($pageList as $page){
                                ?>
                          <tr>
                            <td data-label="#">#</td>
                            <td data-label="page"><?php echo $page["type"]?></td>
                            <td data-label="Action">
                                <a href="<?=base_url()?>admin/page/edit-page/<?php echo $page["id"]?>" class="ml-auto badge badge-warning p-2" ><i class="fa fa-pencil"></i></a>
                            </td>
                          </tr>
                          <?php }}else{echo "<tr><td colspan='4'>No Detail...</td></tr>"; } ?>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>

        <?php
  if($pageList){?>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<?php } ?>
<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/responsive-table.css");?>">
