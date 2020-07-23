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
              <li class="breadcrumb-item active">Edit Cate: <?= $cate_info->cate_name; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<!-- form start -->
      	  <?php if(isset($validation)) { ?>
			<?= $validate->listErrors(); ?>
		  <?php } ?>
          <form method="post" enctype="multipart/form-data" action="<?= $cate_info->cate_id; ?>">
          	<?= csrf_field() ?>
        	<div class="row">

    		
          <!-- left column -->
	          <div class="col-md-6">
	            <!-- general form elements -->
	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Main Info: <?= $cate_info->cate_name; ?></h3>
	              </div>
	              <!-- /.card-header -->
	              
	                <div class="card-body">

	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Tiêu Đề Menu</label>
	                    <input type="text" name="cate_name" value="<?= $cate_info->cate_name; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Tiêu Đề">
	                  </div>

	                  <div class="row">
	                    <div class="col-sm-12">
	                      <!-- select -->
	                      <div class="form-group">
	                        <label>Lựa Chọn Menu</label>
	                        <select class="form-control" name="parent_cate_id">
	                          <option value="0">Là Menu Cha</option>

	                          
	                          <hr>
                          	  <optgroup label="Là Menu Của">
                          		<?php foreach ($cate as $row): ?>
							      <option value="<?= $row->cate_id ?>" <?php if($row->cate_id == $cate_info->parent_cate_id){echo 'selected';} ?> >* <?php echo $row->cate_name; ?></option>
							      <?php endforeach; ?>
						      </optgroup>
	                          

	                          
	                        </select>
	                      </div>
	                    </div>

	                  </div>


	                  <div class="form-group">
	                    <label>Meta Key</label>
	                    <textarea class="form-control" name="meta_key" rows="3" placeholder="Enter ..." maxlength="255"><?= $cate_info->meta_key; ?></textarea>
	                  </div>

	                  <div class="form-group">
	                    <label>Meta Desc</label>
	                    <textarea class="form-control" name="meta_desc" rows="3" placeholder="Enter ..." maxlength="255"><?= $cate_info->meta_desc; ?></textarea>
	                  </div>

	                  

	                  

	                </div>
	                <!-- /.card-body -->

	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
	                  <button type="submit" class="btn btn-default float-right">Cancel</button>
	                </div>
	              
	            </div>
	            <!-- /.card -->

	          </div>
	          <!--/.col (left) -->



	          <!-- right column -->
	          <div class="col-md-6">
	            <!-- general form elements disabled -->
	            <div class="card card-warning">
	              <div class="card-header">
	                <h3 class="card-title">More Info</h3>
	              </div>

	            </div>
	            <!-- /.card -->

	            <!-- /.card -->
	          </div>
	          <!--/.col (right) -->
          
	        </div>
	        <!-- /.row -->
        </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



<?= $this->endSection() ?>