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
            <!-- <a href="#" class="text-white"><span class="mr-2 text-white icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">tranhuuphu.me@gmail.com</span></a> -->
            <span class="mx-md-2 d-inline-block"></span>
            <a href="tel:0963214487" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span class="d-none d-md-inline-block">+84 096 321 4487</span></a>
            <?php echo date("jS F, Y", strtotime("11.12.10"));?>
            

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
    <header class="site-navbar js-sticky-header site-navbar-target shrink" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative ">
          
            
            <div class="site-logo" >
              <a href="<?= base_url('') ?>" class="text-black"><span class="text-primary">KhanhAn</a>
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block ">
                  <li><a href="<?= base_url('') ?>" class="nav-link">Home</a></li>

                  <?php foreach($cate_info as $key): ?>

                    <?php foreach($cate_info as $key3): ?>
                      <?php $array_key[] = $key3['parent_cate_id']; ?>

                    <?php endforeach; ?>


                    <?php if($key['parent_cate_id'] == 0 && in_array($key['cate_id'], $array_key) == FALSE): ?>
                      <li><a href="<?php echo base_url().'/'.$key['cate_slug']; ?>" title="<?= $key['cate_name']; ?>" class="nav-link"><?= $key['cate_name']; ?></a></li>
                      
                    <?php elseif($key['parent_cate_id'] == 0 && in_array($key['cate_id'], $array_key) == TRUE): ?>
                      

                      <li class="has-children">
                        <?php $id_sub = $key['cate_id'] ?>
                        <a href="<?php echo base_url().'/'.$key['cate_slug']; ?>" title="<?= $key['cate_name']; ?>" class="nav-link"><?= $key['cate_name']; ?></a>
                        
                        <ul class="dropdown arrow-top">
                          <?php foreach($cate_info as $key2): ?>
                            <?php if($key2['parent_cate_id'] == $id_sub): ?>
                              <li><a href="<?php echo base_url().'/'.$key2['cate_slug']; ?>" title="<?= $key2['cate_name']; ?>" class="nav-link"><?= $key2['cate_name']; ?></a></li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                          
                            
                        </ul>

                        
                      </li>

                    <?php endif; ?>

                  <?php endforeach; ?>
                  <style type="text/css">

                    .form-search{
                      position: relative;
                    }
                    .form-search button{
                      position: absolute;
                      top: 7.5px;
                      right: 8px;
                      background: transparent;
                      outline: 0;
                      border: none;
                    }
                    .form-search button span{
                      position: absolute;
                      top: 0;
                      right: 0;
                      background: transparent;
                      outline: 0;
                    }
                    .form-search button span{

                      background: none;
                    }
                    .form-search button span:hover{
                      color: #007bff;
                      transition: 0.3s;
                    }
                    button:focus {outline:0;}
                    #___gcse_1, .gsc-control-cse{
                      height: 50px;
                    }
                    @media(min-width: 936px){
                      .form-search{
                        position: relative;
                      }
                    .form-search button{
                        position: absolute;
                        top: 7.5px;
                        right: 10px;
                        background: transparent;
                        outline: 0;
                        border: none;
                      }
                    }
                  </style>
                  <!-- search -->
                  <li style="padding-bottom: 5px;">
                    <form class="form-search" action="search" method="get">
                      <input type="text" name="q">
                      <button type="submit"><span class="icon-search"></span></button>
                    </form>


                  </li>

                </ul>

              </nav>

          
            </div>


          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <!-- End Nav Bar -->