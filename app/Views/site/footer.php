  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <?php foreach($page_info as $row): ?>
                    <?php if($row['page_status'] != 1): ?>
                      <li><a href="<?php echo base_url().'/'.$row['page_slug']; ?>.html" title="<?= $row['page_title']; ?>"><?= $row['page_title']; ?></a></li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </div>


              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-1 mt-1 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright">
                <small>
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank" >Phú</a>
                </small></p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>


    <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/popper.min.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/bootstrap.min.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/owl.carousel.min.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.sticky.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.fancybox.min.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/aos.js"></script>
  
  <script src="<?= base_url('/'); ?>/public/site_asset/js/main.js?v=<?= date('h-i-s') ?>"></script>