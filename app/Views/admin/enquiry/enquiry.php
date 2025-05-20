<div class="page-header">
            <h3 class="page-title">Enquiry List</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Enquiry</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Enquiry</li>
                </ol>
            </nav>
        </div>
        <div class='row'>
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                      <div class="mb-4">
                        <h4 class="card-title mb-sm-0">Enquiry List</h4>
                      </div>
                      <p>&nbsp;</p>
                      <table Id="example" class="display table table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th scope="col" width="10%">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">State</th>
                            <th scope="col">City</th>
                            <th scope="col">Address</th>
                            <th scope="col">Pin Code</th>
                            <th scope="col">Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            if($enquiryList){
                              $count=1;
                              foreach($enquiryList As $enquiry){
                                $state = stateById($enquiry['state']);
                                $ciyt = cityById($enquiry['city']);
                                ?>
                          <tr>
                            <td data-label="#"><?php echo $count++;?></td>
                            <td data-label="name"><?php echo $enquiry["name"];?></td>
                            <td data-label="email"><?php echo $enquiry["email"]?></td>
                            <td data-label="phone"><?php echo $enquiry["phone"]?></td>
                            <td data-label="state"><?php echo $state["state"]?></td>
                            <td data-label="city"><?php echo $ciyt["city"]?></td>
                            <td data-label="address"><?php echo $enquiry["address"]?></td>
                            <td data-label="pincode"><?php echo $enquiry["pincode"]?></td>
                            <td data-label="date"><?php echo date("d-m-Y H:i:s A", strtotime($enquiry["date"]))?></td>
                           
                            
                          </tr>
                          
                          <?php }}else{echo "<tr><td colspan='9'>No Detail...</td></tr>"; } ?>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>

<?php
  if($enquiryList){?>
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
