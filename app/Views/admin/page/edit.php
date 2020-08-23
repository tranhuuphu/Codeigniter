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
      	<!-- form start -->
          <form method="post" enctype="multipart/form-data" action="<?= $page_info->page_id ?>">
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
	                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Tiêu Đề" value="<?= $page_info->page_title ?>">
	                  </div>


				        <!-- /.col-->

				        <div class="form-group">
				          <div class="card">
				            <div class="card-body bg-primary">
				            	<h5 class="card-title">Nội Dung</h5>
				            </div>
				            <!-- /.card-header -->
				            <textarea class="textarea" id="content" name="content" placeholder="Place some text here" ><?= $page_info->page_content ?></textarea>
				          </div>
				        </div>
				        <!-- /.col-->

				        <script>
						    CKEDITOR.replace( 'content',
								 {
								     filebrowserBrowseUrl: '<?= base_url('/'); ?>/public/editor/ckfinder/ckfinder.html',
								     uploadUrl: '<?= base_url('/'); ?>/public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
								     filebrowserImageBrowseUrl: '<?= base_url('/'); ?>/public/editor/ckfinder/ckfinder.html',
								     filebrowserUploadUrl: '<?= base_url('/'); ?>/public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
								     filebrowserImageUploadUrl: '<?= base_url('/'); ?>/public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
								     
								 });


						</script>

	                  <div class="form-group">
	                    <label>Meta Key</label>
	                    <textarea class="form-control" name="meta_key" rows="3" placeholder="Enter ..." maxlength="255"><?= $page_info->meta_key ?></textarea>
	                  </div>

	                  <div class="form-group">
	                    <label>Meta Desc</label>
	                    <textarea class="form-control" name="meta_desc" rows="3" placeholder="Enter ..." maxlength="255"><?= $page_info->meta_desc ?></textarea>
	                  </div>

	                  

	                  

	                </div>
	                <!-- /.card-body -->


	              
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
	                        <?php if($page_info->page_status == 1): ?>
		                        <div class="form-check">
		                          <input class="form-check-input" type="radio" name="status" value="1" checked>
		                          <label class="form-check-label">Là Trang Chủ</label>
		                        </div>
		                        <div class="form-check">
		                          <input class="form-check-input" type="radio" name="status" value="0">
		                          <label class="form-check-label">Trang Thường</label>
		                        </div>
	                        <?php endif; ?>

	                        <?php if($page_info->page_status != 1 && isset($home_page)): ?>
		                        <div class="form-check">
		                          <input class="form-check-input" type="radio" name="status" value="1" disabled>
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
	                  	<label for="exampleInputFile">Ảnh sản phẩm</label>
						<input type="file" name="image" id="img" class="input-group custom-file"  class="form-control hidden" onchange="changeImg(this)">
						<img id="avatar" class="thumbnail" width="300px" src="<?php echo base_url('public'); ?>/upload/page/<?= $page_info->page_image ?>">
	                  </div>


	                
	              </div>
	              <!-- /.card-body -->
	            </div>
	            <!-- /.card -->

	            <!-- /.card -->
	          </div>
	          <!--/.col (right) -->

	          <div class="col-lg-12 mb-3">
	          	<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-default float-">Cancel</button>
                </div>
	          </div>
          
	        </div>
	        <!-- /.row -->
        </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



<?= $this->endSection() ?>