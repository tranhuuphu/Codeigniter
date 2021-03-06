<?= $this->extend('site/layout') ?>

<?= $this->section('main_content') ?>
<style type="text/css">

    a {
    	text-decoration: none;
    	color: #333;
    	-webkit-transition: .4s;
    	transition: .4s;
    }
    .section-title {
    	position: relative;
    }
    .section-title p {
    	font-size: 16px;
    	margin-bottom: 5px;
    	font-weight: 400;
    }
    .section-title h4 {
    	font-size: 40px;
    	font-weight: 600;
    	text-transform: capitalize;
    	position: relative;
    	padding-bottom: 20px;
    	display: inline-block;
    }
    .section-title h4::before {
    	position: absolute;
    	content: "";
    	width: 80px;
    	height: 2px;
    	background-color: #d8d8d8;
    	bottom: 0;
    	left: 50%;
    	margin-left: -40px;
    }
    .section-title h4::after {
    	position: absolute;
    	content: "";
    	width: 50px;
    	height: 2px;
    	background-color: #FF7200;
    	left: 0;
    	bottom: 0;
    	left: 50%;
    	margin-left: -25px;
    }
    .blog-img {
    	position: relative;
      overflow: hidden;
      height: 250px;
      background-color: #f7f7f7;
      box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2);
    }
    .blog-img img {
    	width: 100%;
      height: 250px;
      object-fit:cover; 
      transition: all .25s ease;
    }
    .media {
      position: relative;
      overflow: hidden;
      height: 180px;
    }
    .media img {
      height: 180px;
      object-fit:cover; 
      transition: all .25s ease;
    }

    .media{
      box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2);
    }


    .single-blog:hover img {
    	opacity: .85;
    	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=85)";
    	transition: 0.3s;
      cursor: pointer;
    }

    .blog-content {
    	padding: 20px 20px;
      background-color: #fff;
    }
    .single-blog {
    	border: 1px solid #eee;
      margin-bottom: 20px;
    }
    .blog-title h4 {
    	font-size: 20px;
    	font-weight: 500;
    	margin-bottom: 5px;
      text-transform: capitalize !important;
      font-weight: bold;
    }

    .blog-content a.box_btn {
    	display: inline-block;
    	background-color: #FF7200;
    	padding: 5px 15px;
    	color: #fff;
    	text-transform: capitalize;
    	margin-top: 20px;
    }
    a.box_btn::before {
    	position: absolute;
    	content: "";
    	width: 100%;
    	height: 100%;
    	background-color: #CC5B00;
    	left: -100%;
    	top: 0;
    	-webkit-transition: .5s;
    	transition: .5s;
    	z-index: -1;
    }
    a.box_btn {
    	overflow: hidden;
    	z-index: 2;
    	-webkit-transition: .5s;
    	transition: .5s;
    	position: relative;
    	text-decoration:none;
    }
    a.box_btn:hover::before {
    	left: 0;
    	z-index: -1;
    }
    #pagination a{

    	border-color: #ff8b00;
    	color: #000;
    }

    #pagination a:hover{

    	color: #3495eb;
    }
    #pagination .page-link{

    	border-color: #c9c7c7;
    	border-radius: 0;
    }

    #pagination .page-link:focus {
  	  box-shadow: inset 0 -1px 0 #ddd;
  	}
  	#pagination .page-item.active .page-link{
  		background-color: #ededed;
  	}
  	#pagination .active a{
  		color: #0a3ffc;
  	}
</style>



  <nav aria-label="breadcrumb" class="container mt-5 mb-5">
	  <ol class="breadcrumb" style="border-radius: 0">
	    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><a href="<?= $cate_detail->cate_slug ?>"><?= $cate_detail->cate_name ?></a></li>
	  </ol>
	</nav>



	<?php $post_i = array_slice($post_cate, 0,3); $post_ii = array_slice($post_cate, 3, 8);  ?>
	<section class="blog-me pt-20 pb-10" id="blog">
      <div class="container">

        <div class="row">
        	<?php foreach($post_i as $key): ?>
	            <div class="col-lg-4 col-md-4">
	              <div class="single-blog">
	                 <div class="blog-img">
	                    <img src="<?= base_url('public/upload/post'.'/'.$key['post_image']) ?>" alt="<?= $key['post_title']; ?>">
	                 </div>
	                 <div class="blog-content">
	                    <div class="blog-title">
	                       <h4><a href="<?= base_url().'/'.$cate_detail->cate_slug.'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h4>

	                    </div>
	                    <p><?= $key['post_intro']; ?></p>
	                    <a href="<?= base_url().'/'.$cate_detail->cate_slug.'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title="<?= $key['post_title']; ?>" class="box_btn"><span class="icon-arrow-right"></span> Read more</a>
	                 </div>
	              </div>
	            </div>
        	<?php endforeach; ?>
        </div>
        <div class="card" style="border-radius: 0; display: none">
          <div class="card-body">
            <!-- This is some text within a card body. -->
          </div>
        </div>
        <div class="row mt-3">
        	<div class="col-lg-12">
        		<div class="row">
        			<?php foreach($post_ii as $key): ?>
        			<div class="col-lg-6 col-sm-12 mb-4 post-media">
        				<div class="media">
  						    <img src="<?= base_url('public/upload/post'.'/'.$key['post_image']) ?>" class="mr-3" alt="<?= $key['post_title']; ?>" width="35%">
    						  <div class="media-body">
    						    <h4 class="mt-2 mb-2"><a href="<?= base_url().'/'.$cate_detail->cate_slug.'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h4>
    						    <?= $key['post_intro']; ?>.
    						  </div>
  						</div>
        			</div>
                    
        			<?php endforeach; ?>

        		</div>
        	</div>

        </div>
        <?php if($post_count > 11): ?>
          <div class="mt-3" id="pagination">
          	<?php if ($pager) :?>
    			    <?php $pagi_path = base_url().'/'.getenv('pagi_path').$cate_detail->cate_slug; ?>
    			    <?= $pager->links() ?>
    			  <?php endif ?>
          </div>
        <?php endif; ?>
      </div>
  </section>
    

<?= $this->endSection() ?>



<?= $this->section('meta') ?>

  <title><?= $cate_detail->cate_name ?></title>

  <link rel="alternate" href="<?= base_url().'/'.$cate_detail->cate_slug ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url().'/'.$cate_detail->cate_slug ?>"/>


  <meta name="description" content="<?= $cate_detail->meta_desc ?>" />
  <meta name="keywords" content="<?= $cate_detail->meta_key ?>" />
  <meta name="title" content="<?= $cate_detail->cate_name ?>" />
  



  <!-- Schema.org markup for Google+ -->
  
  <meta itemprop="name" content="<?= $cate_detail->cate_name ?>">
  <meta itemprop="image" content="<?php //base_url('public/upload/page/'.'/'.$cate_detail->page_image) ?>">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="article">
  <meta name="twitter:site" content="<?= base_url().'/'.$cate_detail->cate_slug ?>">
  <meta name="twitter:title" content="<?= $cate_detail->cate_name ?>">
  <meta name="twitter:description" content="<?= $cate_detail->meta_desc ?>">
  <meta name="twitter:creator" content="<?= base_url().'/'.$cate_detail->cate_slug ?>">
  <meta name="twitter:image" content="<?php //base_url('public/upload/page/'.'/'.$cate_detail->page_image) ?>">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="" />
  <meta property="og:title" content="<?= $cate_detail->cate_name ?>" />
  <meta property="og:url" content="<?= base_url().'/'.$cate_detail->cate_slug ?>" />
  <meta property="og:image" content="<?php //base_url('public/upload/page/'.'/'.$cate_detail->page_image) ?>" />
  <meta property="og:description" content="<?= $cate_detail->meta_desc ?>" />
  
  
  <meta name="thumbnail" content="<?php //base_url('public/upload/page/'.'/'.$cate_detail->page_image) ?>" />    


  <meta property="og:image:secure_url" content="<?php //base_url('public/upload/page/'.'/'.$cate_detail->page_image) ?>" />


  <meta content="news" itemprop="genre" name="medium"/>
  <meta content="vi-VN" itemprop="inLanguage"/>
  <meta content="" itemprop="articleSection"/>
  <meta content="<?= $cate_detail->created_at ?>" itemprop="datePublished" name="pubdate"/>
  <meta content="<?= $cate_detail->updated_at ?>" itemprop="dateModified" name="lastmod"/>
  <meta content="<?= $cate_detail->created_at ?>" itemprop="dateCreated"/>
<?= $this->endSection() ?>