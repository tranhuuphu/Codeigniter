<style type="text/css">
  .hotline-phone-ring-wrap {
    position: fixed;
    bottom: 80px;
    left: 0;
    z-index: 999999;
  }
  .hotline-phone-ring {
    position: relative;
    visibility: visible;
    background-color: transparent;
    width: 110px;
    height: 110px;
    cursor: pointer;
    z-index: 11;
    -webkit-backface-visibility: hidden;
    -webkit-transform: translateZ(0);
    transition: visibility .5s;
    left: 0;
    bottom: 0;
    display: block;
  }
  .hotline-phone-ring-circle {
    width: 85px;
    height: 85px;
    top: 10px;
    left: 10px;
    position: absolute;
    background-color: transparent;
    border-radius: 100%;
    border: 2px solid #e60808;
    -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
    animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
    transition: all .5s;
    -webkit-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    opacity: 0.5;
  }
  .hotline-phone-ring-circle-fill {
    width: 55px;
    height: 55px;
    top: 25px;
    left: 25px;
    position: absolute;
    background-color: rgba(230, 8, 8, 0.7);
    border-radius: 100%;
    border: 2px solid transparent;
    -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
    animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
    transition: all .5s;
    -webkit-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    transform-origin: 50% 49.8%;
  }
  .hotline-phone-ring-img-circle {
  background-color: #ff0000;
  /*background-color: #e60808;*/
  width: 33px;
  height: 33px;
  top: 36px;
  left: 36.1px;
  position: absolute;
  background-size: 20px;
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  }
  .hotline-phone-ring-img-circle .pps-btn-img {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  }
  .hotline-phone-ring-img-circle .pps-btn-img img {
  width: 20px;
  height: 20px;
  }
  .hotline-bar {
    position: absolute;
    /*background: rgba(230, 8, 8, 0.75);*/
    background: #e60808;
    height: 37.3px;
    width: 180px;
    line-height: 40px;
    border-radius: 3px;
    padding: 0 10px;
    background-size: 100%;
    cursor: pointer;
    transition: all 0.8s;
    -webkit-transition: all 0.8s;
    z-index: 9;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
    border-radius: 50px !important;
    /* width: 175px !important; */
    left: 32.5px;
    bottom: 38.3px;
  }
  .hotline-bar > a {
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
    text-indent: 42px;
    display: block;
    letter-spacing: 1px;
    line-height: 39px;
    font-family: Arial;
  }
  .hotline-bar > a:hover,
  .hotline-bar > a:active {
    color: #fff;
  }
  @-webkit-keyframes phonering-alo-circle-anim {
    0% {
      -webkit-transform: rotate(0) scale(0.5) skew(1deg);
      -webkit-opacity: 0.1;
    }
    30% {
      -webkit-transform: rotate(0) scale(0.7) skew(1deg);
      -webkit-opacity: 0.5;
    }
    100% {
      -webkit-transform: rotate(0) scale(1) skew(1deg);
      -webkit-opacity: 0.1;
    }
  }
  @-webkit-keyframes phonering-alo-circle-fill-anim {
    0% {
      -webkit-transform: rotate(0) scale(0.7) skew(1deg);
      opacity: 0.6;
    }
    50% {
      -webkit-transform: rotate(0) scale(1) skew(1deg);
      opacity: 0.6;
    }
    100% {
      -webkit-transform: rotate(0) scale(0.7) skew(1deg);
      opacity: 0.6;
    }
  }
  @-webkit-keyframes phonering-alo-circle-img-anim {
    0% {
      -webkit-transform: rotate(0) scale(1) skew(2deg);
    }
    10% {
      -webkit-transform: rotate(-25deg) scale(1) skew(2deg);
    }
    20% {
      -webkit-transform: rotate(25deg) scale(1) skew(2deg);
    }
    30% {
      -webkit-transform: rotate(-25deg) scale(1) skew(2deg);
    }
    40% {
      -webkit-transform: rotate(25deg) scale(1) skew(2deg);
    }
    50% {
      -webkit-transform: rotate(0) scale(1) skew(2deg);
    }
    100% {
      -webkit-transform: rotate(0) scale(1) skew(2deg);
    }
  }
  @media (max-width: 768px) {
    .hotline-bar {
      display: none;
    }
  }
 
  .phone-mobile {display: none;}
  .mustang-nav {
      position: fixed;
      right: 13px;
      background: #bec1c2;
      border-radius: 5px;
      width: auto;
      z-index: 150;
      bottom: 50px;
      padding: 10px 0;
      border: 1px solid #f2f2f2;
  }
  .mustang-nav ul {list-style: none;padding: 0;margin: 0;}
  .mustang-nav ul li {list-style: none!important;}
  .mustang-nav ul>li a {
      border:none;
      padding: 3px;
      display: block;
      border-radius: 5px;
      text-align: center;
      font-size: 10px;
      line-height: 15px;
      color: #515151;
      font-weight: 700;
      max-width: 72.19px;
      max-height: 54px;
      text-decoration: none;
  }
  .mustang-nav ul>li .chat_animation{display:none}
  .mustang-nav ul>li a i.ticon-heart {
      background: url(<?= base_url('public/img/') ?>/icon-map.png) no-repeat;
      background-size: contain;
      width: 36px;
      height: 36px;
      display: block;
  }
  .mustang-nav ul>li a i.ticon-zalo-circle2 {
      background: url(<?= base_url('public/img/') ?>/icon-zalo.png) no-repeat;
      background-size: contain;
      width: 36px;
      height: 36px;
      display: block;
  }.mustang-nav li .button {
      background: transparent;
  }.mustang-nav ul>li a i.ticon-angle-up {
      background: url(<?= base_url('public/img/') ?>/icon-angle-up.png) no-repeat;
      background-size: contain;
      width: 36px;
      height: 36px;
      display: block;
  }.mustang-nav ul>li a i {
      width: 33px;
      height: 33px;
      display: block;
      margin: auto;
  }.mustang-nav ul li .button .btn_phone_txt {
      position: relative; top:35px;
      font-size: 10px;
      font-weight: bold;
      text-transform: none;
  }

  .mustang-nav ul>li a i.ticon-messenger {
      background: url(<?= base_url('public/img/') ?>/icon-messenger.png) no-repeat;
      background-size: contain;
      width: 36px;
      height: 36px;
      display: block;
  }.mustang-nav ul li .button .phone_animation i {
      display: inline-block;
      width: 55px;
      font-size: 26px;
  }
  .mustang-nav ul>li a i.ticon-chat-sms {
      background: url(<?= base_url('public/img/') ?>/icon-sms-1.jpg) no-repeat;
      background-size: contain;
      width: 38px;
      height: 36px;
      display: block;
  }
  .mustang-nav ul>li a i.icon-phone-w {
      background: url(<?= base_url('public/img/') ?>/p2.gif) no-repeat;
      background-size: contain;
    width: 55px;
      height: 55px;}
  .mustang-nav ul li .button .btn_phone_txt {
      position: relative;
  }
  .hidden-top{display: none;}
  
  @media only screen and (max-width: 600px){
    .mustang-nav li .chat_animation{display:block !Important}
     
    .mustang-nav li .button .phone_animation {box-shadow: none;
        position: absolute;
        top: -16px;
        left: 50%;
        transform: translate(-50%,0);
    }
    .mustang-nav ul>li a{padding:0; margin:0 auto}
    .mustang-nav {
        background: white;
        width: 100%; border-radius:0;
        color: #fff;
        height: 60px;
        line-height: 50px;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 999;
        padding: 5px;
        margin: 0;
        box-shadow: 0 4px 10px 0 #000;
    }
    .mustang-nav li {
        float: left;
        width: 20%;
        list-style: none;
        height: 50px;
    }
    .phone-mobile{display:block !important}
    .hidden-top>a{
      margin-top: 10px;
    }
  }
</style>

<div class="hotline-phone-ring-wrap">
  <div class="hotline-phone-ring">
    <div class="hotline-phone-ring-circle"></div>
    <div class="hotline-phone-ring-circle-fill"></div>
    <div class="hotline-phone-ring-img-circle">
      <a href="tel:0123456789" class="pps-btn-img">
        <img src="<?= base_url('public/img/') ?>/icon-call-kiot37.png" alt="Gọi điện thoại" width="50">
      </a>
    </div>
  </div>
  <div class="hotline-bar">
    <a href="tel:0963214487">
      <span class="text-hotline">096 321 4487</span>
    </a>
  </div>
</div>

<div class="mustang-nav">
  <ul>
      <li><a href="#" rel="nofollow" target="_blank"><i class="ticon-heart"></i>Tìm đường</a></li>
      <li><a href="https://zalo.me/0974953600" rel="nofollow" target="_blank"><i class="ticon-zalo-circle2"></i>Chat Zalo</a></li>
      <li class="phone-mobile">
        <a href="tel:0963214487" rel="nofollow" class="button">
          <span class="phone_animation animation-shadow">
              <i class="icon-phone-w" aria-hidden="true"></i>
          </span>
          <span class="btn_phone_txt">Gọi điện</span>
        </a>
      </li>
      <li>
        <a href="#" rel="nofollow" target="_blank"><i class="ticon-messenger"></i>Messenger</a>
      </li>
      <li class="hidden-top">
        <a href="#" id="back2Top2" rel="nofollow">
          <i class="ticon-angle-up" aria-hidden="true" title="top"></i>
        </a>
      </li>
      <li class="to-top-pc">
        <a href="#" id="back2Top" rel="nofollow">
          <i class="ticon-angle-up" aria-hidden="true" title="top"></i>
        </a>
      </li>
  </ul>
</div>

  <!-- <a id="back2Top" title="Back to top" href="#">&#10148;</a> -->
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


  <!-- <script src="<?= base_url('/'); ?>/public/site_asset/js/popper.min.js"></script> -->
  <script src="<?= base_url('/'); ?>/public/site_asset/js/bootstrap.min.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/owl.carousel.min.js"></script>
  <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.sticky.js"></script>
  <!-- <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.waypoints.min.js"></script> -->
  <!-- <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.animateNumber.min.js"></script> -->
  <!-- <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.fancybox.min.js"></script> -->
  <!-- <script src="<?= base_url('/'); ?>/public/site_asset/js/jquery.easing.1.3.js"></script> -->
  <script src="<?= base_url('/'); ?>/public/site_asset/js/aos.js"></script>
  
  <script src="<?= base_url('/'); ?>/public/site_asset/js/main.js?v=<?= date('h-i-s') ?>"></script>
  
  