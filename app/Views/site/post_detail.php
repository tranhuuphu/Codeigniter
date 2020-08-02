<?= $this->extend('site/layout') ?>

<?= $this->section('main_content') ?>
<nav aria-label="breadcrumb" class="container mt-5 mb-3">
  <ol class="breadcrumb" style="background: #dce0e6">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?= $cate_detail->cate_slug ?>"><?= $cate_detail->cate_name ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?= $post_info->post_title ?></li>
  </ol>
</nav>
<style type="text/css">
  .post_content img{
    width: 100% !important;
  }
</style>
<section class="site-section">
  <div class="container" >
    <div class="row" >
      <div class="col-md-8 blog-content">
        <h1 class="lead text-black font-size-24 text-bold" style="font-weight: bold; font-size: 26px;"><?= $post_info->post_title ?></h1>
        <div class="mt-3 text-black post_content">
        	<?= $post_info->post_content ?>
        </div>
        <hr>
        <style type="text/css">
        	.related-content a{
        		font-size: 18px;
        		padding-top: 20px;
        		color: #7ac4f5;
        		line-height: 0.3 !important;
        	}
        	.related-content a:hover{
        		color: #0582ff;
        	}
        </style>
        <div class="row">
        	<?php foreach($related as $key): ?>
	            <div class="col-lg-3 col-md-4">
	              <div class="related-blog">
	                 <div class="blog-img">
	                    <img src="https://media1.nguoiduatin.vn/media/nguyen-hoang-yen/2018/08/25/nhaphuongtruonggianglamgisauledinhhon.jpg" alt="" width="100%">

	                 </div>
	                 <div class="related-content pt-2">
	                    <a href="<?= base_url().'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a>
	                    <p><?= $key['post_intro']; ?></p>
	                 </div>
	              </div>
	            </div>
        	<?php endforeach; ?>
        </div>

        <div class="pt-1">
          Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
        </div>
        <hr>


        <div class="pt-1">
          <h3 class="mb-5">Leave a comment</h3>
        </div>

      </div>

      <div class="col-md-4 sidebar">
        <div class="sidebar-box">
          <h2 class="text-black text-center text-bold">Liên Hệ</h2>
          <?php foreach($page_info as $row): ?>
             <?php if($row['page_status'] == 2): ?>
             	<img src="<?= base_url('public/upload/page'.'/'.$row['page_image']) ?>" alt="<?= $row['page_title']; ?>" class="img-fluid mb-4">
          
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
		          <p><a href="<?php echo base_url().'/'.$row['page_slug']; ?>.html" title="<?= $row['page_title']; ?>" class="btn btn-primary btn-md text-white">Read More</a></p>

             <?php endif; ?>
           <?php endforeach; ?>
          
        </div>
        <div class="sidebar-box">
          <div class="categories">
            <h3>Categories</h3>
            <?php foreach($cate_info as $key): ?>
                <?php if($key['parent_cate_id'] == 0): ?>
            		<li><a href="#"><?= $key['cate_name'] ?></a></li>
            	<?php endif; ?>
            <?php endforeach; ?>
            <!-- <li><a href="#">Web Development <span>(14)</span></a></li> -->
          </div>
        </div>


        <!-- <div class="sidebar-box">
          <h3>Paragraph</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
        </div> -->
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>