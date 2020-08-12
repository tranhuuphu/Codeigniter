<?= $this->extend('site/layout') ?>

<?= $this->section('main_content') ?>

<nav aria-label="breadcrumb" class="container mt-5 mb-5" style="margin-top: 25px;">
	<ol class="breadcrumb" style="background-color: #e8e2e0; border-radius: 0; ">
	  <li class="breadcrumb-item"><a style="color: #000; font-weight: bold;" href="<?= base_url() ?>">Home</a></li>
	  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Search</a></li>
	  <li class="breadcrumb-item active" aria-current="page">Key: <?= $key ?></li>
	</ol>
</nav>
<style type="text/css">
	#adBlock, #e2{
		display: none !important;
	}
</style>


<div class="site-section bg-light">
  <div class="container" >
    <div class="row" style="background: #fff; margin: 0 2px;">
      
      <div class="gcse-searchresults-only"></div>

      
      
      
    </div>
  </div>
</div>




<?= $this->endSection() ?>

<?= $this->section('meta') ?>

  <title>Tìm Kiếm Từ Khóa - <?= $key ?></title>

  <link rel="alternate" href="<?= base_url() ?>/search?q=<?= $key ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url() ?>/search?q=<?= $key ?>"/>


  <meta name="description" content="Tìm Kiếm Từ Khóa - <?= $key ?>" />
  <meta name="keywords" content="<?= $key ?>" />
  <meta name="title" content="Tìm Kiếm Từ Khóa - <?= $key ?>" />
  



  <!-- Schema.org markup for Google+ -->
  
  <meta itemprop="name" content="Tìm Kiếm Từ Khóa - <?= $key ?>">
  <meta itemprop="image" content="">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="article">
  <meta name="twitter:site" content="<?= base_url() ?>/search?q=<?= $key ?>">
  <meta name="twitter:title" content="Tìm Kiếm Từ Khóa - <?= $key ?>">
  <meta name="twitter:description" content="Tìm Kiếm Từ Khóa - <?= $key ?>">
  <meta name="twitter:creator" content="<?= base_url() ?>/search?q=<?= $key ?>">
  <meta name="twitter:image" content="">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="" />
  <meta property="og:title" content="Tìm Kiếm Từ Khóa - <?= $key ?>" />
  <meta property="og:url" content="<?= base_url() ?>/search?q=<?= $key ?>" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="Tìm Kiếm Từ Khóa - <?= $key ?>" />
  
  
  <meta name="thumbnail" content="" />    


  <meta property="og:image:secure_url" content="" />


  <meta content="news" itemprop="genre" name="medium"/>
  <meta content="vi-VN" itemprop="inLanguage"/>
  <meta content="" itemprop="articleSection"/>
  <meta content="<?= date('h-s-i') ?>" itemprop="datePublished" name="pubdate"/>
  <meta content="<?= date('h-s-i') ?>" itemprop="dateModified" name="lastmod"/>
  <meta content="<?= date('h-s-i') ?>" itemprop="dateCreated"/>
<?= $this->endSection() ?>