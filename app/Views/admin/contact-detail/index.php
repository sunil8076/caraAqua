<div class="page-header">
            <h3 class="page-title">Contact Detail</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Contact Detail</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact Detail</li>
                </ol>
            </nav>
        </div>
        <div class='row'>
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Contact Detail</h4>
                      </div>
                      <p>&nbsp;</p>
                      <table Id="example" class="display table table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th scope="col" width="10%">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-label="#">#</td>
                            <td data-label="email"><?php echo $contactData['email1']?></td>
                            <td data-label="phone"><?php echo $contactData['phone1']?></td>
                            <td data-label="Action">
                                <a href="<?=base_url()?>admin/contact-detail/edit/<?php echo $contactData['id'];?>" class="ml-auto badge badge-warning p-2" ><i class="fa fa-pencil"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>