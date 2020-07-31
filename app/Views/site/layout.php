<!doctype html>
<html lang="en">
  <head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="audience" content="General">
  <meta http-equiv="content-language" content="vi" />
  <meta http-equiv="REFRESH" content="1800">    
  <meta name="revisit-after" content="1 days">

  <meta name="robots" content="index,follow,all">

  <meta name="author" content=""/>
  <meta name="copyright" content="<?= base_url('') ?>" />
  <meta name="google-site-verification" content="">

  <!-- Favicon -->
  <?php foreach($page_info as $row): ?>
      <?php if($row['page_status'] == 1): ?>
          <link rel="shortcut icon" href="<?= base_url('public/upload/page'.'/'.$row['page_image']) ?>" sizes="any" type="image/x-icon/png">
      <?php endif; ?>
  <?php endforeach; ?>
  <!-- Yoast Seo Premium 12.4 -->
  <?= $this->renderSection('meta') ?>

  <meta property="fb:app_id" content="{}" />


  

  <meta property="og:locale" content="vi_VN" />
  <meta name="format-detection" content="telephone=0963214487">

  <meta property="fb:app_id" content="">
  <meta name="resource-type" content="article">
  <meta name="distribution" content="Global">
  <meta property="fb:pages" content="">
  <meta property="article:author" content="">
  <meta property="article:publisher" content="Link">


  <meta name="geo.placename" content=""/>
  <meta name="geo.region" content=""/>
  <meta name="geo.position" content=""/>
  <meta name="ICBM" content=""/>




  <?= $this->include('site/header'); ?>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  
  <div class="site-wrap"  id="home-section">
    <?= $this->include('site/nav'); ?>

    

    <?= $this->renderSection('main_content') ?>

    
    <?= $this->include('site/footer'); ?>
  </div>

  
    
  </body>

    <script type="text/javascript">
      $('.pagination li').addClass('page-item');
      $('.pagination li a').addClass('page-link');
    </script>
</html>






