<?= $this->extend('site/layout') ?>

<?= $this->section('main_content') ?>
	
  


  <style type="text/css">
    /*---------------------
      Reason Categories
    -----------------------*/
    .categories {
      overflow: hidden;
      margin: 20px 0;
    }

    .categories__item {
      height: 314px;
      background-repeat: no-repeat;
      background-size: contain;
      background: transparent;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      padding-left: 15px;
      margin-bottom: 10px;
      /*margin-left: -20px;*/
    }

    .categories__item.categories__large__item {
      background-position: center;
      background-repeat: no-repeat;
      /*background-size: cover;*/
      background-size: 100% 100%;
      height: 638px;
      /*padding-left: 15px;*/
      background: transparent;
    }

    .categories__item.categories__large__item .categories__text {
      position: absolute;
      bottom: 5%;

      padding: 10px 15px;
      margin-right: 15px;
      background: #f4f6fa;

      opacity: 0.9;
      text-align: justify;
    }

    .categories__item.categories__small__item .categories__text {
      position: absolute;
      bottom: 8%;
      padding: 5px 10px;
      margin: 0 15px 0 0 ;
      background: #f2f4f3;
      opacity: 0.8
    }

    .categories__item.categories__large__item .categories__text p {
      margin-bottom: 15px;
    }

    .categories__text h1 {
      color: #111111;
      margin-bottom: 5px;
      font-size: 25px;
    }

    .categories__text h4 {
      color: #111111;
      font-weight: 700;
      font-size: 17px;
      text-align: justify;
    }

    .categories__text p {
      margin-bottom: 2px;
    }

    .categories__text a {
      font-size: 14px;
      color: red;
      text-transform: uppercase;
      font-weight: 600;
      position: relative;
      padding: 0 0 2px;
      display: inline-block;
    }

    .categories__text2 a:after {
      position: absolute;
      left: 0;
      bottom: 0;
      height: 2px;
      margin-top: 8px;
      width: 100%;
      background: #ca1515;
      content: "";
    }



    /*Feature*/
    .post-title a{
      color: #000;
      font-weight: 700;
    }

    .post-title a:hover{
      color: #1c6afc;
    }

    .liner {
      display: flex;
      align-items: center;
    }
    .liner a{
      font-size: 22px; font-weight: bold;
      color: #000;
    }

    .liner a:hover{
      color: #ff7f08;
    }
    .post-title, .card-title a:hover{
      color: #1c6afc !important;
    }
    .post-value a:hover{
      color: #1c6afc !important;
    }
    .liner::after {
      content: '';
      flex: 1;
      margin-left: 1rem;
      height: 3px;
      background-color: #f0ad4e;
    }
    .post-img{
      height: 350px;
      overflow: hidden;
      background: #fff;
    }
    .post-img img{
      height: 350px;
      width: 100%;
      object-fit: contain;
    }

    .post-img2{
      height: 250px;
      overflow: hidden;
      background: #fff;
    }
    .post-img2 img{
      height: 250px;
      width: 100%;
      object-fit: contain;
    }
    .card{
      border-radius: 0;
    }
    @media (min-width: 937px){
      .pd-15 .categories__item{
        margin-left: -20px;
      }
    }
    .media{
        background: #fff;
        box-shadow: 0px 3px 9px 0px #ccc;
      }

    @media (max-width: 936px){
      .pd-15 .categories__item{
        margin-top: 20px;
      }
      .post-15{
        margin-bottom: 15px;
        border-bottom: 1px solid #f4f4f4;
      }
      
    }

    .post-cate h2{
      font-size: 18px;
      font-weight: bold;
      text-transform: capitalize;
    }
    .post-cate a{
      color: #000;
    }
    .post-cate a:hover{
      color: #1c6afc;
    }
    .post-cate-img img{
      float: left;
      margin-right: 10px;
      margin-top: 7px;
    }
    .post-cate-img .post-text{
      padding-right: 10px;
    }
    .post-cate-img p{
      text-align: justify;
      line-height: 1.5;
      font-size: 15px;
    }
    .card-title h2{
/*      font-size: 18px;
      font-weight: bold;
      text-transform: capitalize !important;
      color: #000;
      line-height: 1.4;*/
    }
    .card-title a{
      font-size: 18px;
      font-weight: bold;
      text-transform: capitalize !important;
      color: #000;
      line-height: 1.4;
    }

    .block__35630 h3{
      font-size: 23px;
      font-weight: bold;
      color: #f5841b;
    }

    .block__35630 p{
      color: #363534;
    }
    
  </style>

  <nav aria-label="breadcrumb" class="container mt-5 mb-5" style="margin-top: 25px;">
    <ol class="breadcrumb" style="background-color: ; border-radius: 0; ">
      <li class="breadcrumb-item"><a style="color: #000; font-weight: bold;" href="<?= base_url() ?>">Home</a></li>
    </ol>
  </nav>

    <!-- Categories Section Begin -->
    <?php if(isset($recent_post)): ?> 
      <?php $recent_post_i = array_slice($recent_post,0,1); $recent_post_ii = array_slice($recent_post,1,4); ?>
      <section class="categories">
          <div class="container">
            <div class="alert text-black text-center bg-lig" role="alert" style="border-radius: 0; background: #fff; font-weight: bold;">
              
              <span class="icon-bullhorn"></span> Bài Viết Mới

            </div>
            <div class="row">
              <?php foreach($recent_post_i as $key): ?>
                <div class="col-lg-6">
                    <div class="categories__item categories__large__item set-bg" data-setbg="<?= base_url('public/upload/post'.'/'.$key['post_image']) ?>" aria-label="<?= $key['post_title'] ?>" style="background-size: cover, contain;">
                        <div class="categories__text categories__text2">
                            <h1 class="card-title"><a href="<?= $key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title= "<?= $key['post_title'] ?>"><?= $key['post_title'] ?></a></h1>
                            <p><?= $key['post_intro'] ?></p>
                        </div>
                    </div>
                  <?php endforeach; ?>
                </div>

                <div class="col-lg-6 pd-15">
                    <div class="row">
                      <?php foreach($recent_post_ii as $key): ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="categories__item categories__small__item set-bg" data-setbg="<?= base_url('public/upload/post'.'/'.$key['post_image']) ?>" aria-label="<?= $key['post_title'] ?>" style="background-size: cover, contain;">
                                <div class="categories__text" style="margin-top: 30px;">
                                    <h4 class="card-title" style="margin-bottom: -0.2rem"><a href="<?= $key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title= "<?= $key['post_title'] ?>"><?= $key['post_title'] ?></a></h4>
                                </div>
                            </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                </div>
            </div>
          </div>
      </section>
    <?php endif; ?>
    <!-- Categories Section End -->
    
    <div class="site-section pt-5" style="background-color: #aed8fc">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="block__35630">
              <h3 class="mb-3 text-center">Vận Chuyển Nội Địa</h3>
              <p class="text-center">Với hơn 5 năm trong ngành vận tải nội địa Khánh An luôn đáp ứng mọi nhu cầu quý khách
              Liên Hệ Hotline: 0933 444 776 – Mr Mộng để yêu cầu dịch vụ</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
            <div class="block__35630">
              <h3 class="mb-3 text-center">Dịch Vụ Du Lịch</h3>
              <p class="text-center">Liên Hệ: 0933 444 776 – Mr Mộng để có thêm thông tin về sản phẩm dịch vụ và các sản phẩm liên quan tới dịch vụ du lịch nội địa.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
            <div class="block__35630">
              <h3 class="mb-3 text-center">Cho Thuê Xe 30 Chỗ</h3>
              <p class="text-center">Dịch vụ vận tải cho thuê xe bao gồm cho thuê phương tiện phục vụ du lịch, công tác, đám hỷ,… LH: 0933 444 776.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  
  <!-- section -->
  <?php if(isset($featured)): ?> 
    <?php $featured_i = array_slice($featured,0,2); $featured_ii = array_slice($featured,2,3); ?>
    <div class="section pt-5" style="background-color: #ededed">
      <!-- container -->
      <div class="container">
        <div class="alert alert-secondary" role="alert" style="border-radius: 0;">
          Thông Tin Nổi Bật
        </div>
        <!-- row -->
        <div class="row"> 
          <!-- post -->
          <?php foreach($featured_i as $key): ?>
            <div class="col-md-6" data-aos="fade-up">
              <div class="post post-thumb">
                <a class="post-img" href="<?= $key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title= "<?= $key['post_title'] ?>"><img src="<?= base_url('public/upload/post'.'/'.$key['post_image']) ?>" alt="<?= $key['post_title'] ?>"></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a class="post-category cat-2" href="<?= $key['cate_slug'] ?>" title= "<?= $key['cate_name'] ?>"><?= $key['cate_name'] ?></a>
                    <!-- <span class="post-date">March 27, 2018</span> -->
                  </div>
                  <h3 class="post-title"><a href="<?= $key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title= "<?= $key['post_title'] ?>"><?= $key['post_title'] ?></a></h3>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- /post -->

        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row" data-aos="fade-up">
          <!-- post -->
          <?php foreach($featured_ii as $key): ?>
            <div class="col-md-4">
              <div class="post">
                <a class="post-img post-img2" href="<?= $key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title= "<?= $key['post_title'] ?>"><img src="<?= base_url('public/upload/post'.'/'.$key['post_image']) ?>" alt="<?= $key['post_title'] ?>"></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a class="post-category cat-1" href="<?= $key['cate_slug'] ?>" title= "<?= $key['cate_name'] ?>"><?= $key['cate_name'] ?></a>
                    <!-- <span class="post-date">March 27, 2018</span> -->
                  </div>
                  <h3 class="post-title"><a href="<?= $key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title= "<?= $key['post_title'] ?>"><?= $key['post_title'] ?></a></h3>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- /post -->


          <div class="clearfix visible-md visible-lg"></div>

        </div>
        <!-- /row -->


      </div>
      <!-- /container -->
    </div>
  <?php endif; ?>
  <!-- /section -->



  <!-- Post Follow Cate -->
  <div class="site-section">
    <div class="block__73694 mb-2" id="services-section">
      <div class="container">
        <div class="row d-flex no-gutters align-items-stretch">
          
          <div class="col-12 col-lg-8  mt-4">
            
            <?php foreach($post_cate as $value): ?>

                <?php $post_slice = array_slice($value,0,1); $post_i = array_shift($value); //dd($value); ?>

                
                <?php foreach($post_slice as $row): ?>
                  <?php if($row['parent_cate_id'] == 0): ?>
                    <div class="liner" data-aos="fade-right" data-aos-duration="2000"><a class="text-bold" href="<?= $row['cate_slug']; ?>" title="<?= $row['cate_name']; ?>"><?= $row['cate_name']; ?></a></div>
                  <?php elseif($row['parent_cate_id'] != 0): ?>
                    <?php foreach($cate_all as $key): ?>
                      <?php if($key['cate_id'] == $row['parent_cate_id']): ?>
                        <div class="liner"><a class="text-bold" href="<?= $key['cate_slug']; ?>" title="<?= $key['cate_name']; ?>"><?= $key['cate_name']; ?></a></div>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                <?php endforeach; ?>
                

                <div class="row mb-4 mt-4" data-aos="fade-right" data-aos-duration="2000">

                  <!-- thứ 1 -->
                  <div class="col-md-6 post-15">
                    <?php foreach($post_slice as $row): ?>
                    <div class="card">
                      <img src="<?= base_url('public/upload/post'.'/'.$row['post_image']) ?>" class="card-img-top" alt="<?= $row['post_title']; ?>">
                      <div class="card-body bg-light">
                        <h2 class="card-title"><a href="<?= base_url('/'.$row['cate_slug'].'/'.$row['post_slug'].'-'.$row['post_id'].'.html') ?>" title="<?= $row['post_title']; ?>"><?php echo $row['post_title']; ?></a></h2>
                        <p class="card-text "><?php echo $row['post_intro']; ?></p>
                        <!-- <a href="<?= base_url('/'.$row['cate_slug'].'/'.$row['post_slug'].'-'.$row['post_id'].'.html') ?>" title="<?= $row['post_title']; ?>" class="btn btn-primary">Expand</a> -->
                      </div>
                    </div>
                  <?php endforeach; ?>
                  </div>

                  <!-- Thứ 2 Featured -->
                  <div class="col-md-6">
                    <?php foreach($value as $row): ?>
                      <div class="post-cate">
                        <h2><a href="<?= base_url('/'.$row['cate_slug'].'/'.$row['post_slug'].'-'.$row['post_id'].'.html') ?>" title="<?= $row['post_title']; ?>"><?= $row['post_title']; ?></a></h2>
                        <div class="post-cate-img">
                          <img width="35%" src="<?= base_url('public/upload/post'.'/'.$row['post_image']) ?>" class="align-self-start" alt="<?= $row['post_title']; ?>">
                          <div class="post-text">
                            <p><?php echo $row['post_intro']; ?></p>
                          </div>
                        </div>
                      </div>
                      <hr>
                    <?php endforeach; ?>

                    


                  </div>
                  

                </div>
                
                
            <?php endforeach; ?>
          </div>

          

          <div class="col-lg-4 col-md-12 p-lg-3 mt-2">
            <div class="card bg-info">
              <div class="card-header text-black text-center" style="font-weight: bold; font-size: 25px; color: #fff">
                Contact Us
              </div>

            </div>


            <?php foreach($page_info as $row): ?>
              <?php if($row['page_slug'] == 'lien-he'): ?>
                <a href="<?php echo base_url().'/'.$row['page_slug']; ?>.html" title="<?= $row['page_title']; ?>" class=""><img src="<?= base_url('public/upload/page').'/'.$row['page_image'] ?>" class = "img-fluid"></a>
              <?php endif; ?>
            <?php endforeach; ?>

          </div>

        </div>
      </div>      
    </div>
  </div>

    


  <div class="site-section bg-dark" id="about-section">
    <div class="container">

      <div class="row mt-3">
        <div class="col-12">
          <div class="row">
            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
              <div class="block-counter-1">
                <span class="number">5+</span>
                <span class="caption">Year of Experience</span>
              </div>
            </div>
            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="block-counter-1">
                <span class="number">20+</span>
                <span class="caption">Customer</span>
              </div>
            </div>
            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="block-counter-1">
                <span class="number"><span data-number="2000">80</span>+</span>
                <span class="caption">Number of Employees</span>
              </div>
            </div>
            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="block-counter-1">
                <span class="number"><span data-number="1500">50</span>+</span>
                <span class="caption">Number Of Vehicle</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





<?= $this->endSection() ?>



<?= $this->section('meta') ?>

  <title><?= $page_home->page_title ?></title>

  <link rel="alternate" href="<?= base_url() ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url() ?>"/>


  <meta name="description" content="<?= $page_home->meta_desc ?>" />
  <meta name="keywords" content="<?= $page_home->meta_key ?>" />
  <meta name="title" content="<?= $page_home->page_title ?>" />
  



  <!-- Schema.org markup for Google+ -->
  
  <meta itemprop="name" content="<?= $page_home->page_title ?>">
  <meta itemprop="image" content="<?= base_url('public/upload/page/'.'/'.$page_home->page_image) ?>">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="article">
  <meta name="twitter:site" content="<?= base_url() ?>">
  <meta name="twitter:title" content="<?= $page_home->page_title ?>">
  <meta name="twitter:description" content="<?= $page_home->meta_desc ?>">
  <meta name="twitter:creator" content="<?= base_url() ?>">
  <meta name="twitter:image" content="<?= base_url('public/upload/page/'.'/'.$page_home->page_image) ?>">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="" />
  <meta property="og:title" content="<?= $page_home->page_title ?>" />
  <meta property="og:url" content="<?= base_url() ?>" />
  <meta property="og:image" content="<?= base_url('public/upload/page/'.'/'.$page_home->page_image) ?>" />
  <meta property="og:description" content="<?= $page_home->meta_desc ?>" />
  
  
  <meta name="thumbnail" content="<?= base_url('public/upload/page/'.'/'.$page_home->page_image) ?>" />    


  <meta property="og:image:secure_url" content="<?= base_url('public/upload/page/'.'/'.$page_home->page_image) ?>" />


  <meta content="news" itemprop="genre" name="medium"/>
  <meta content="vi-VN" itemprop="inLanguage"/>
  <meta content="" itemprop="articleSection"/>
  <meta content="<?= $page_home->created_at ?>" itemprop="datePublished" name="pubdate"/>
  <meta content="<?= $page_home->updated_at ?>" itemprop="dateModified" name="lastmod"/>
  <meta content="<?= $page_home->created_at ?>" itemprop="dateCreated"/>
<?= $this->endSection() ?>

