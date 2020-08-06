<?= $this->extend('site/layout') ?>

<?= $this->section('main_content') ?>
<nav aria-label="breadcrumb" class="container mt-5 mb-3">
  <ol class="breadcrumb" style="background: #dce0e6; border-radius: 0">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?= $cate_detail->cate_slug ?>"><?= $cate_detail->cate_name ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?= $post_info->post_title ?></li>
  </ol>
</nav>
<style type="text/css">
  .post_content img{
    width: 100% !important;
  }
  .post_content a{
    color: blue !important;
  }
  .post_content p{
    font-family: sans-serif !important;
  }
</style>
<section class="site-section">
  <div class="container" >
    <div class="row" >
      <div class="col-md-8 blog-content">
        <div class="">
          <h1 class="lead text-black font-size-24 text-bold pb-2" style="font-weight: bold; font-size: 26px;"><?= $post_info->post_title ?></h1>
          <div class="mt-1 text-black post_content" style="background-color: #fff; padding: 15px;">
            <?= $post_info->post_content ?>
          </div>
        </div>

        <style type="text/css">
        	.related-content a{
        		font-size: 18px;
        		padding-top: 20px;
        		color: #000;
        		line-height: 0.3 !important;
        	}
        	.related-content a:hover{
        		color: #0582ff;
        	}
          .clearfix{
            clear: both;
          }
          .tags-info a{
            color: #081cfc;
          }
          .tags-info a:hover{
            color: #03329e;
          }
        </style>
        <div class="clearfix"></div>
        <hr>
        <div class="pt-1 tags-info">
          <?php
            $data_tag = json_decode($post_info->post_tag_json);
          ?>
          Tags:
          <?php if($data_tag): ?>
            <?php foreach($data_tag as $tag): ?>
              <a href="<?php echo base_url('').'/tags/'.$tag ?>">#<?= $tag ?></a>,&nbsp;
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <hr>
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
          <h3 class="mb-5">Leave a comment</h3>
        </div>

      </div>

      <div class="col-md-4 sidebar">
        <div class="sidebar-box">
          <h2 class="text-black text-center text-bold" style="margin-top: -15px; font-weight: bold;">Liên Hệ</h2>
          <?php foreach($page_info as $row): ?>
             <?php if($row['page_status'] == 2): ?>
             	<img src="<?= base_url('public/upload/page'.'/'.$row['page_image']) ?>" alt="<?= $row['page_title']; ?>" class="img-fluid mb-4">
          
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
		          <p><a href="<?php echo base_url().'/'.$row['page_slug']; ?>.html" title="<?= $row['page_title']; ?>" class="btn btn-danger btn-md text-white">Read More</a></p>

             <?php endif; ?>
           <?php endforeach; ?>
          
        </div>
        <div class="sidebar-box">
          <div class="categories">
            <h3>Categories</h3>
            <?php foreach($cate_info as $key): ?>
                <?php if($key['parent_cate_id'] == 0): ?>
            		<li><a href="<?= $key['cate_slug'] ?>" title = "<?= $key['cate_name'] ?>"><?= $key['cate_name'] ?></a></li>
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


<?= $this->section('meta') ?>

  <title><?= $post_info->post_title ?></title>

  <link rel="alternate" href="<?= base_url().'/'.$post_info->post_slug ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url().'/'.$post_info->post_slug ?>"/>


  <meta name="description" content="<?= $post_info->meta_desc ?>" />
  <meta name="keywords" content="<?= $post_info->meta_key ?>" />
  <meta name="title" content="<?= $post_info->post_title ?>" />
  



  <!-- Schema.org markup for Google+ -->
  
  <meta itemprop="name" content="<?= $post_info->post_title ?>">
  <meta itemprop="image" content="<?php base_url('public/upload/post/'.'/'.$post_info->post_image) ?>">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="article">
  <meta name="twitter:site" content="<?= base_url().'/'.$post_info->post_slug ?>">
  <meta name="twitter:title" content="<?= $post_info->post_title ?>">
  <meta name="twitter:description" content="<?= $post_info->meta_desc ?>">
  <meta name="twitter:creator" content="<?= base_url().'/'.$post_info->post_slug ?>">
  <meta name="twitter:image" content="<?php base_url('public/upload/post/'.'/'.$post_info->post_image) ?>">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="" />
  <meta property="og:title" content="<?= $post_info->post_title ?>" />
  <meta property="og:url" content="<?= base_url().'/'.$post_info->post_slug ?>" />
  <meta property="og:image" content="<?php base_url('public/upload/post/'.'/'.$post_info->post_image) ?>" />
  <meta property="og:description" content="<?= $post_info->meta_desc ?>" />
  
  
  <meta name="thumbnail" content="<?php base_url('public/upload/post/'.'/'.$post_info->post_image) ?>" />    


  <meta property="og:image:secure_url" content="<?php base_url('public/upload/post/'.'/'.$post_info->post_image) ?>" />


  <meta content="news" itemprop="genre" name="medium"/>
  <meta content="vi-VN" itemprop="inLanguage"/>
  <meta content="" itemprop="articleSection"/>
  <meta content="<?= $post_info->created_at ?>" itemprop="datePublished" name="pubdate"/>
  <meta content="<?= $post_info->updated_at ?>" itemprop="dateModified" name="lastmod"/>
  <meta content="<?= $post_info->created_at ?>" itemprop="dateCreated"/>
<?= $this->endSection() ?>