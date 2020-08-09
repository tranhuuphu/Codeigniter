<?= $this->extend('site/layout') ?>

<?= $this->section('main_content') ?>
	
  <nav aria-label="breadcrumb" class="container mt-5 mb-5" style="margin-top: 25px;">
    <ol class="breadcrumb" style="background-color: #e0e0e0; border-radius: 0; ">
      <li class="breadcrumb-item"><a style="color: #000; font-weight: bold;" href="<?= base_url() ?>">Home</a></li>
    </ol>
  </nav>
	<!-- Featured -->
	<div class="owl-carousel slide-one-item">
    <?php if($featured): ?> 
  		<?php foreach($featured as $key): ?>
  			<div class="site-section-cover overlay img-bg-section" style="background-image: url(<?= base_url('public/upload/post'.'/'.$key['post_image']) ?>); background-size: contain" arial = '<?= $key['post_title'] ?>'>
  				<div class="container">
  				  <div class="row align-items-center justify-content-center text-center">
  				    <div class="col-md-12 col-lg-7 col-sm-12">
  				      <h1 data-aos="fade-up" data-aos-delay="300" style="font-size: 30px; line-height: 1.2;"><?= $key['post_title'] ?></h1>  
  				      <p class="mb-5" data-aos="fade-up" data-aos-delay="100"><?= $key['post_intro'] ?></p>
  				      <p data-aos="fade-up" data-aos-delay="200"><a href="<?= $key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title= "<?= $key['post_title'] ?>" class="btn btn-outline-white border-w-2 btn-md">Read More</a></p>
  				    </div>
  				  </div>
  				</div>
  			</div>
      <?php endforeach; ?>
		<?php endif; ?>
  </div>
  <style type="text/css">
    .post-title a{
      color: #000;
      font-weight: 700;
    }

    .post-title a:hover{
      color: #47acf5;
    }

    .liner {
      display: flex;
      align-items: center;
    }
    .liner a{
      font-size: 22px; font-weight: bold;
    }
    .post-title, .card-title a:hover{
      color: #47acf5 !important;
    }
    .post-value a:hover{
      color: #47acf5 !important;
    }
    .liner::after {
      content: '';
      flex: 1;
      margin-left: 1rem;
      height: 3px;
      background-color: #f0ad4e;
    }
  </style>
  <!-- section -->
  <?php if($featured): ?> 
  <?php $featured_i = array_slice($featured,0,2); $featured_ii = array_slice($featured,2,3); ?>
    <div class="section pt-5" style="background-color: #ededed">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row"> 
          <!-- post -->
          <?php foreach($featured_i as $key): ?>
            <div class="col-md-6">
              <div class="post post-thumb">
                <a class="post-img" href="<?= $key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title= "<?= $key['post_title'] ?>"><img src="<?= base_url('public/upload/post'.'/'.$key['post_image']) ?>" alt="<?= $key['post_title'] ?>"></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a class="post-category cat-2" href="category.html">JavaScript</a>
                    <span class="post-date">March 27, 2018</span>
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
        <div class="row">


          <!-- post -->
          <?php foreach($featured_ii as $key): ?>
            <div class="col-md-4">
              <div class="post">
                <a class="post-img" href="<?= $key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title= "<?= $key['post_title'] ?>"><img src="<?= base_url('public/upload/post'.'/'.$key['post_image']) ?>" alt="<?= $key['post_title'] ?>"></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a class="post-category cat-1" href="category.html">Web Design</a>
                    <span class="post-date">March 27, 2018</span>
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




  <div class="site-section">
    <div class="block__73694 mb-2" id="services-section">
      <div class="container">
        <div class="row d-flex no-gutters align-items-stretch">
          
          <div class="col-12 col-lg-8  mt-4">
            
            <?php foreach($post_cate as $value): ?>

                <?php $post_slice = array_slice($value,0,1); $post_i = array_shift($value); //dd($value); ?>

                
                <?php foreach($post_slice as $row): ?>
                  <?php if($row['parent_cate_id'] == 0): ?>
                    <div class="liner "><a class="text-bold" href="<?= $row['cate_slug']; ?>" title="<?= $row['cate_name']; ?>"><?= $row['cate_name']; ?></a></div>
                  <?php elseif($row['parent_cate_id'] != 0): ?>
                    <?php foreach($cate_all as $key): ?>
                      <?php if($key['cate_id'] == $row['parent_cate_id']): ?>
                        <div class="liner"><a class="text-bold" href="<?= $key['cate_slug']; ?>" title="<?= $key['cate_name']; ?>"><?= $key['cate_name']; ?></a></div>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                <?php endforeach; ?>
                

                <div class="row mb-4 mt-4">
                  <!-- thứ 1 -->
                  <div class="col-md-6">
                    <?php foreach($post_slice as $row): ?>
                    <div class="card">
                      <img src="<?= base_url('public/upload/post'.'/'.$row['post_image']) ?>" class="card-img-top" alt="<?= $row['post_title']; ?>">
                      <div class="card-body bg-light">
                        <h5 class="card-title"><a href="<?= base_url('/'.$row['cate_slug'].'/'.$row['post_slug'].'-'.$row['post_id'].'.html') ?>" title="<?= $row['post_title']; ?>" class="text-black"><?php echo $row['post_title']; ?></a></h5>
                        <p class="card-text "><?php echo $row['post_intro']; ?></p>
                        <a href="<?= base_url('/'.$row['cate_slug'].'/'.$row['post_slug'].'-'.$row['post_id'].'.html') ?>" title="<?= $row['post_title']; ?>" class="btn btn-primary">Expand</a>
                      </div>
                    </div>
                  <?php endforeach; ?>
                  </div>

                  <!-- Thứ 2 -->
                  
                  <div class="col-md-6">
                    <?php foreach($value as $row): ?>
                      <h1 class="mt-0 post-value" style="font-size: 20px; "><a href="<?= base_url('/'.$row['cate_slug'].'/'.$row['post_slug'].'-'.$row['post_id'].'.html') ?>" title="<?= $row['post_title']; ?>" class="text-black"><?= $row['post_title']; ?></a></h1>
                      <div class="media" class="mb-3">

                        <img width='35%' src="<?= base_url('public/upload/post'.'/'.$row['post_image']) ?>" class="align-self-start mr-3 mt-2" alt="<?= $row['post_title']; ?>">
                        <div class="media-body" >
                          <p><?php echo $row['post_intro']; ?></p>
                        </div>
                      </div><hr>
                    <?php endforeach; ?>
                  </div>
                  

                </div>
                
                
            <?php endforeach; ?>
          </div>

          

          <div class="col-lg-4 col-md-12 p-lg-3 mt-2 ">
            <h3 class="mb-3 text-black">Land &amp; Property</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus id dignissimos nemo minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio, maiores facere officiis. Cum, esse, iusto?</p>

            <p>Minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio, maiores facere officiis. Cum, esse, iusto?</p>

            <ul class="ul-check primary list-unstyled mt-5">
              <li>Lorem ipsum dolor.</li>
              <li>Quod, amet. Provident.</li>
              <li>Quo, adipisci, quis.</li>
              <li>Cumque perspiciatis, blanditiis?</li>
            </ul>
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
                <span class="number"><span data-number="30">0</span>+</span>
                <span class="caption">Year of Experience</span>
              </div>
            </div>
            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="block-counter-1">
                <span class="number"><span data-number="300">0</span>+</span>
                <span class="caption">Expert Engineers</span>
              </div>
            </div>
            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="block-counter-1">
                <span class="number"><span data-number="2000">0</span>+</span>
                <span class="caption">Number of Employees</span>
              </div>
            </div>
            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="block-counter-1">
                <span class="number"><span data-number="1500">0</span>+</span>
                <span class="caption">Number of Golds</span>
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

