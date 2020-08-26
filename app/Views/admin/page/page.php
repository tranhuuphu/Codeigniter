<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('/admin/page') ?>">Page</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh Sách Bài Viết <a href="page/add" class=""><i class="fas fa-plus"></i> Add New Page</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center">Order</th>
                    <th class="text-center">Title</th>
                    <!-- <th class="text-center">Name</th> -->
                    <th class="text-center">Status</th>
                    <th class="text-center" width="20%">Option</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($page_info as $row): ?>
                      <tr>
                        <td><?php echo $row->page_id; ?></td>
                        <td><?php echo $row->page_title; ?></td>
                        <!-- <td><?php echo $row->page_content; ?></td> -->
                        <td><?php if($row->page_status == 1){echo 'Trang Chủ';}else{echo 'Trang Thường';} ?></td>
                        <td>
                          <div class="row text-center">
                            <a href="page/edit/<?php echo $row->page_id; ?>" class="btn btn-info mr-2"><i class="far fa-edit"></i> Edit</a>
                            <a href="page/delete/<?php echo $row->page_id; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                            <a href="page/delete/<?php echo $row->page_id; ?>" class="btn btn-primary mt-1"><i class="fas fa-trash"></i> Delete Full</a>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="text-center">Order</th>
                    <th class="text-center">Title</th>
                    <!-- <th class="text-center">Name</th> -->
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
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<?= $this->endSection() ?>