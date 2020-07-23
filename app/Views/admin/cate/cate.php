<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('/admin/cate') ?>">Cate</a></li>
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
                <h3 class="card-title">Danh Mục Danh Sách Menu <a href="cate/add" class=""><i class="fas fa-plus"></i> Add New Cate</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center">Order</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Option</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($cate as $row): ?>
                      <tr>
                        <td><?php echo $row->cate_id; ?></td>
                        <td><?php echo $row->cate_name; ?></td>
                        <td><?php if($row->parent_cate_id == 0){echo 'Parent Cate';}else{echo 'Sub Cate';} ?></td>
                        <td>
                          <div class="row text-center">
                            <a href="cate/edit/<?php echo $row->cate_id; ?>" class="btn btn-info mr-3 ml-5"><i class="far fa-edit"></i> Edit</a>
                            <a href="cate/delete/<?php echo $row->cate_id; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="text-center">Order</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Option</th>
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