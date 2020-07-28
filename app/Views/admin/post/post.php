<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('/admin/post') ?>">Post</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Nav Bar -->
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Thùng Rác</a>
                  </li>

                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">



                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Danh Sách Bài Viết <a href="post/add" class=""><i class="fas fa-plus"></i> Add New Post</a></h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th class="text-center">Order</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center" width="20%">Option</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($post as $row): ?>
                                  <tr>
                                    <td><?php echo $row->post_id; ?></td>
                                    <td><?php echo $row->post_title; ?></td>
                                    <td><?php echo $row->post_intro; ?></td>
                                    <td>Image</td>
                                    <td>
                                      <div class="row text-center">
                                        <a href="post/edit/<?php echo $row->post_id; ?>" class="btn btn-info mr-2"><i class="far fa-edit"></i> Edit</a>
                                        <a href="post/move/<?php echo $row->post_id; ?>" onclick="return confirm('are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i> Trash</a>
                                      </div>
                                    </td>
                                  </tr>
                                <?php endforeach; ?>
                              
                              
                              </tbody>
                              <tfoot>
                              <tr>
                                <th class="text-center">Order</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center" width="20%">Option</th>
                              </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                    </div>



                   
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                    
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Danh Sách</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th class="text-center">Order</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center" width="20%">Option</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($post_trash as $row): ?>
                                  <tr>
                                    <td><?php echo $row->post_id; ?></td>
                                    <td><?php echo $row->post_title; ?></td>
                                    <td><?php echo $row->post_intro; ?></td>
                                    <td>Image</td>
                                    <td>
                                      <div class="row text-center">
                                        <a href="post/edit/<?php echo $row->post_id; ?>" class="btn btn-info mr-2" ><i class="far fa-edit"></i> Edit</a>

                                        <a href="post/restore/<?php echo $row->post_id; ?>" onclick="return confirm('are you sure?')" class="btn btn-primary"><i class="fas fa-trash-restore"></i> Restore</a>


                                        <a href="post/delete/<?php echo $row->post_id; ?>" onclick="return confirm('are you sure?')" class="btn btn-danger mt-2"><i class="fas fa-trash"></i> Delete Full</a>

                                        
                                      </div>
                                    </td>
                                  </tr>
                                <?php endforeach; ?>
                              
                              
                              </tbody>
                              <tfoot>
                              <tr>
                                <th class="text-center">Order</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center" width="20%">Option</th>
                              </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                    </div>




                  </div>

                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>

        </div>
        <!-- Nav Bar -->




        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<?= $this->endSection() ?>