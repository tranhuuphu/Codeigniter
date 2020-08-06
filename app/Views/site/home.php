<?= $this->extend('site/layout') ?>

<?= $this->section('main_content') ?>
	
  <nav aria-label="breadcrumb" class="container mt-5 mb-5" style="margin-top: 25px;">
    <ol class="breadcrumb" style="background-color: #e0e0e0; border-radius: 0; ">
      <li class="breadcrumb-item"><a style="color: #000; font-weight: bold;" href="<?= base_url() ?>">Home</a></li>
    </ol>
  </nav>
	<!-- Featured -->
	<div class="owl-carousel slide-one-item">
      
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



<!--       <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/hero_2.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">New Generation of Mining</h1>      
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est odit dolorum voluptates!</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-outline-white border-w-2 btn-md">Get in touch 2</a></p>
            </div>
          </div>
        </div>

      </div> -->
      

    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-mining"></span>
              </div>
              <h3 class="mb-3">Surface Mining</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-gold-ingots"></span>
              </div>
              <h3 class="mb-3">Gold Nuggets</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-wagon"></span>
              </div>
              <h3 class="mb-3">Soil Carrier</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-refinery"></span>
              </div>
              <h3 class="mb-3">Gold Refinery</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-blacksmith"></span>
              </div>
              <h3 class="mb-3">Anvil Blacksmith</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-crucible"></span>
              </div>
              <h3 class="mb-3">Gold Melt Crucible</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="block__73694 mb-2" id="services-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">
            <style type="text/css">
              .liner {
                display: flex;
                align-items: center;
              }
              .liner a{font-size: 22px; font-weight: bold;}
              .liner::after {
                content: '';
                flex: 1;
                margin-left: 1rem;
                height: 3px;
                background-color: #f0ad4e;
              }
            </style>
            <div class="col-12 col-lg-8 block__73422 mt-4" style="" data-aos="fade-right" data-aos-delay="">
              
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
                  

                  <div class="row mb-4 mt-3">
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
                        <h1 class="mt-0" style="font-size: 20px; "><a href="<?= base_url('/'.$row['cate_slug'].'/'.$row['post_slug'].'-'.$row['post_id'].'.html') ?>" title="<?= $row['post_title']; ?>" class="text-black"><?= $row['post_title']; ?></a></h1>
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

            

            <div class="col-lg-4 col-md-12 ml-auto p-lg-3 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
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

        <div class="row">
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

    <div class="site-section" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>Our Team</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere at delectus laudantium, deserunt, atque eveniet. Voluptatem, fuga quos rerum inventore.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Jean Smith</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Mining Expert</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Bob Carry</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project Manager</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Ricky Fisher</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Engineer</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Jean Smith</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Mining Expert</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Bob Carry</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project Manager</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Ricky Fisher</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Engineer</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="site-section bg-light" id="pricing-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>Pricing</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="pricing">
              <h3 class="text-center text-black">Basic</h3>
              <div class="price text-center mb-4 ">
                <span><span>$47</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li class="remove">Lorem ipsum dolor sit amet</li>
                <li class="remove">Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <h3 class="text-center text-black">Premium</h3>
              <div class="price text-center mb-4 ">
                <span><span>$200</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary btn-md text-white">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
              <h3 class="text-center text-black">Professional</h3>
              <div class="price text-center mb-4 ">
                <span><span>$750</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li>Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
              </p>
            </div>
          </div>
        </div>
        
        <div class="row site-section" id="faq-section">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title text-primary">Frequently Ask Questions</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Can I accept both Paypal and Stripe?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">What available is refund period?</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Can I accept both Paypal and Stripe?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">What available is refund period?</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">Where are you from?</h3>
              <p>Voluptatum nobis obcaecati perferendis dolor totam unde dolores quod maxime corporis officia et. Distinctio assumenda minima maiores.</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">What is your opening time?</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Can I accept both Paypal and Stripe?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">What available is refund period?</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <div class="site-section" id="press-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
              <h2>Press</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled">
              <li class="mb-5" data-aos="fade-right" data-aos-delay="">
                <span class="d-block text-muted mb-3">Apr 19, 2019</span>
                <h2 class="h4"><a href="press-single.html" class="text-black">How To Find Gold In Mining</a></h2>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
              </li>
              <li class="mb-5" data-aos="fade-right" data-aos-delay="100">
                <span class="d-block text-muted mb-3">Apr 19, 2019</span>
                <h2 class="h4"><a href="press-single.html" class="text-black">How To Find Gold In Mining</a></h2>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
              </li>
              <li class="mb-5" data-aos="fade-right" data-aos-delay="200">
                <span class="d-block text-muted mb-3">Apr 19, 2019</span>
                <h2 class="h4"><a href="press-single.html" class="text-black">How To Find Gold In Mining</a></h2>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
      <div class="container">
        
        <div class="text-center mb-5">
          <div class="block-heading-1">
            <h2>Testimonial</h2>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13">
          <div>
            <div class="block-testimony-1 text-center">
              
              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Ricky Fisher</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">
              

              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Mellisa Griffin</h3>

              
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              
            </div>
          </div>


        </div>

      </div>
    </div>

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <span>Latest Blog Posts</span>
              <h2>Our Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
            <div>
              <a href="single.html" class="mb-4 d-block"><img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.html">How To Find Gold In Mining</a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a href="single.html" class="by">James Cooper</a></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
              <p><a href="single.html">Read More</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div>
              <a href="single.html" class="mb-4 d-block"><img src="images/hero_3.jpg" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.html">How To Find Gold In Mining</a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a href="single.html" class="by">James Cooper</a></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
              <p><a href="single.html">Read More</a></p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <span>Get In Touch</span>
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black">Need to know more on details. Get In Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum quibusdam nisi, illum nulla aspernatur aut quidem aperiam, quae non tempora recusandae voluptatibus fugit impedit.</p>
            <p><a href="#" class="btn btn-primary text-white">Get Started</a></p>
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

