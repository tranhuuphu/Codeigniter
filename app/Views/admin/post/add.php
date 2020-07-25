<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('/admin/post/add') ?>">Add Post</a></li>
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
	                <h3 class="card-title">Main Info</h3>
	              </div>
	              <!-- /.card-header -->
	              
	                <div class="card-body">

	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Tiêu Đề</label>
	                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Tiêu Đề">
	                  </div>

	                  <div class="form-group">
	                    <label>Giới Thiệu</label>
	                    <textarea class="form-control" name="intro" rows="3" placeholder="Enter ..." maxlength="50"></textarea>
	                  </div>

<!-- 	                  <div class="form-group">
	                    <label>Nội Dung</label>
	                    <textarea class="form-control" name="content" rows="3" placeholder="Enter ..."></textarea>
	                  </div> -->


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
	                        <div class="form-check">
	                          <input class="form-check-input" type="radio" name="featured" value="1">
	                          <label class="form-check-label">Bài Viết Nổi Bật</label>
	                        </div>
	                        <div class="form-check">
	                          <input class="form-check-input" type="radio" name="featured" value="0" checked>
	                          <label class="form-check-label">Không</label>
	                        </div>
	                      </div>
	                    </div>
	                  </div>

	                  <div class="row">
	                    <div class="col-sm-12">
	                      <!-- select -->
	                      <div class="form-group">
	                        <label>Lựa Chọn Menu</label>
	                        <select class="form-control" name="cate">
	                        	<?php foreach($cate as $key2): ?>
                      				<?php $sub_cate[] = $key2['parent_cate_id']; ?>

                      			<?php endforeach; ?>

	                        	<?php foreach($cate as $key): ?>
	                        		<?php if($key['parent_cate_id'] == 0): ?>

	                        			<!-- Lấy toàn bộ parent_cate_id để kiểm tra -->
	                        			<?php foreach($cate as $key2): ?>
	                        				<?php if($key['cate_id'] == $key2['parent_cate_id']): ?>
	                          					<?php $sub_cate[] = $key2['parent_cate_id']; ?>
	                          				<?php endif ?>
	                          			<?php endforeach; ?>

	                          			<!-- Nếu tồn tại 1 cate_id của Parent_cate_id = 0 trong sub_cate thì k được show ra -->
	                          			<?php if(array_key_exists($key['cate_id'], $sub_cate) == NULL): ?>
	                          				<option value="<?= $key['cate_id'] ?>"><?= $key['cate_name'] ?></option>
	                          			<?php else: ?>

	                          				<!-- Ngược lại thì show ra và thêm các menu con trong đó -->
	                          				<optgroup label="<?= $key['cate_name'] ?>">
	                          					<?php $id = $key['cate_id']; ?>

	                          					<!-- Show menu con dựa theo Cate_id có Parent = 0 -->
	                          					<?php foreach($cate as $key3): ?>
	                          						<?php if($key3['parent_cate_id'] == $id): ?>
	                          							<option value="<?= $key3['cate_id'] ?>"><?= $key3['cate_name'] ?></option>
	                          						<?php endif ?>
	                          					<?php endforeach; ?>

				                          		
				                          	</optgroup>
	                          			<?php endif ?>

	                          		<?php endif ?>

	                          	<?php endforeach; ?>
	                          
	                        </select>
	                      </div>
	                    </div>

	                  </div>

	                  <div class="form-group" >
	                  	<label for="exampleInputFile">Ảnh sản phẩm</label>
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