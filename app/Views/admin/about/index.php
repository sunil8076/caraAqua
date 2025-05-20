<div class="page-header">
            <h3 class="page-title">About</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Manage About</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
        <div class='row'>
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">About</h4>
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
                          <tr>
                            <td data-label="#">#</td>
                            <td data-label="heading"><?php echo $about['heading']?></td>
                            <td data-label="Action">
                                <a href="<?=base_url()?>admin/about/edit-about/<?php echo $about['id'];?>" class="ml-auto badge badge-warning p-2" ><i class="fa fa-pencil"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>