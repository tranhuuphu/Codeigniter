    <!-- Mobie Menu -->
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <!-- End Mobie Menu -->
   
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <a href="#" class="text-white"><span class="mr-2 text-white icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@yourdomain.com</span></a>
            <span class="mx-md-2 d-inline-block"></span>
            <a href="#" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span class="d-none d-md-inline-block">1+ (234) 5678 9101</span></a>
            

            <div class="float-right">
            <?php foreach($page_info as $row): ?>
              <?php if($row['page_status'] != 1): ?>
                <a href="<?php echo base_url().'/'.$row['page_slug']; ?>.html" title="<?= $row['page_title']; ?>" class="text-white pr-3"> <span class="d- d-md-inline-block"><?= $row['page_title']; ?></span></a>
              <?php endif; ?>
            <?php endforeach; ?>

            </div>

          </div>
          
        </div>
        
      </div>
    </div>
    <!-- End Top Bar -->
    
    <!-- Nav Bar -->
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="<?= base_url('') ?>" class="text-black"><span class="text-primary">Unearth</a>
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="<?= base_url('') ?>" class="nav-link">Home</a></li>




                  <?php foreach($cate_info as $key): ?>

                    <?php foreach($cate_info as $key3): ?>
                      <?php $array_key[] = $key3['parent_cate_id']; ?>

                    <?php endforeach; ?>


                    <?php if($key['parent_cate_id'] == 0 && in_array($key['cate_id'], $array_key) == FALSE): ?>
                      <li><a href="<?php echo $key['cate_slug']; ?>" title="<?= $key['cate_name']; ?>" class="nav-link"><?= $key['cate_name']; ?></a></li>
                    <?php elseif($key['parent_cate_id'] == 0 && in_array($key['cate_id'], $array_key) == TRUE): ?>

                      <li class="has-children">
                        <?php $id_sub = $key['cate_id'] ?>
                        <a href="<?php echo $key['cate_slug']; ?>" title="<?= $key['cate_name']; ?>" class="nav-link"><?= $key['cate_name']; ?></a>
                        
                        <ul class="dropdown arrow-top">
                          <?php foreach($cate_info as $key2): ?>
                            <?php if($key2['parent_cate_id'] == $id_sub): ?>
                              <li><a href="<?php echo $key2['cate_slug']; ?>" title="<?= $key2['cate_name']; ?>" class="nav-link"><?= $key2['cate_name']; ?></a></li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </ul>
                      </li>

                    <?php endif; ?>

                  <?php endforeach; ?>

                </ul>
              </nav>

          
            </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <!-- End Nav Bar -->