<div class="page-header">
            <h3 class="page-title">Home</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
        <div class='row'>
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Home</h4>
                      </div>
                      <p>&nbsp;</p>
                      <table Id="example" class="display table table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th scope="col" width="10%">#</th>
                            <th scope="col">Service Heading</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-label="#">#</td>
                            <td data-label="service_heading"><?php echo $home['service_heading']?></td>
                            <td data-label="Action">
                                <a href="<?=base_url()?>admin/home/edit-home/<?php echo $home['id'];?>" class="ml-auto badge badge-warning p-2" ><i class="fa fa-pencil"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>