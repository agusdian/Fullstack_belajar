<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">User Access</h1> -->
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 ">
    <h6 class="d-sm-flex justify-content-between align-items-center m-0 font-weight-bold text-primary">User Access
      <a href="<?php base_url()?>/user/access_add" class="d-none d-sm-inline-block btn btn-success btn-icon-split shadow-sm float-right">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Add User Access</span>
      </a>  
    </h6>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10">Number</th>
            <th>User Access</th>
            <th>Description</th>
            <th width="120">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $number = 0; ?>
          <?php foreach ($ua as $access): ?>
          <?php $number++; ?>
          <tr>
            <td width="10"><?php echo $number; ?></td>
            <td><?php echo $access->user_access ?></td>
            <td><?php echo $access->description ?></td>
            <td width="120">
              <a href="#" class="btn btn-info btn-circle btn-sm">
                <i class="fas fa-info-circle"></i>
              </a>

              <a href="#" class="btn btn-warning btn-circle btn-sm">
                <i class="fas fa-edit"></i>
              </a>

              <a href="<?php echo base_url('/user/access_delete/').$access->id_user_access ?>" class="btn btn-danger btn-circle btn-sm">
                <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->