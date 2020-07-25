<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('/admin/page/add') ?>">Add Page</a></li>
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
          <form method="post" enctype="multipart/form-data" action="add">
          	<?= csrf_field() ?>
        	<div class="row">

    	
          <!-- left column -->
	          <div class="col-md-6">
	            <!-- general form elements -->
	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Main Info Page</h3>
	              </div>
	              <!-- /.card-header -->
	              
	                <div class="card-body">

	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Tiêu Đề</label>
	                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Tiêu Đề">
	                  </div>



				        <div class="form-group">
				          <div class="card card-outline card-info">
				            <div class="card-header">
				            	<label>Nội Dung</label>
				            </div>
				            <!-- /.card-header -->
				            <div class="card-body pad">
				              <div class="">
				                <textarea class="textarea" id="summernote" name="content" placeholder="Place some text here" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
				              </div>

				            </div>
				          </div>
				        </div>
				        <!-- /.col-->

	                  <div class="form-group">
	                    <label>Meta Key</label>
	                    <textarea class="form-control" name="meta_key" rows="3" placeholder="Enter ..." maxlength="255"></textarea>
	                  </div>

	                  <div class="form-group">
	                    <label>Meta Desc</label>
	                    <textarea class="form-control" name="meta_desc" rows="3" placeholder="Enter ..." maxlength="255"></textarea>
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
	              <!-- /.card-header -->
	              <div class="card-body">
	                
	                  <div class="row">

	                    <div class="col-sm-12">
	                      <!-- radio -->
	                      <label>Trạng Thái</label>
	                      <div class="form-group">
	                      	<?php if(isset($page_info)): ?>
		                        <div class="form-check">
		                          <input class="form-check-input" type="radio" name="status" value="1" disabled>
		                          <label class="form-check-label">Là Trang Chủ</label>
		                        </div>
		                        <div class="form-check">
		                          <input class="form-check-input" type="radio" name="status" value="0" checked>
		                          <label class="form-check-label">Trang Thường</label>
		                        </div>
	                        <?php endif; ?>

	                        <?php if(!isset($page_info)): ?>
		                        <div class="form-check">
		                          <input class="form-check-input" type="radio" name="status" value="1">
		                          <label class="form-check-label">Là Trang Chủ</label>
		                        </div>
		                        <div class="form-check">
		                          <input class="form-check-input" type="radio" name="status" value="0" checked>
		                          <label class="form-check-label">Trang Thường</label>
		                        </div>
	                        <?php endif; ?>

	                      </div>
	                    </div>
	                  </div>


	                  <div class="form-group" >
	                  	<label for="exampleInputFile">Ảnh bài viết</label>
						<input required type="file" name="image" id="img" class="input-group custom-file"  class="form-control hidden" onchange="changeImg(this)">
						<img id="avatar" class="thumbnail" width="300px" src="<?php echo base_url('public'); ?>/img/upload-cloud.png">
	                  </div>


	                
	              </div>
	              <!-- /.card-body -->
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