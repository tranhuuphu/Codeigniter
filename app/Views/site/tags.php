<?= $this->extend('site/layout') ?>

<?= $this->section('main_content') ?>

    <nav aria-label="breadcrumb" class="container mt-5 mb-5">
	  <ol class="breadcrumb" style="border-radius: 0; background-color: #82d6fa">
	    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="javascript:void(0)">Tags</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><?= $tags_origin ?></li>
	  </ol>
	</nav>
	<style type="text/css">
		.img-tags{
			overflow: hidden;
			height: 350px;

		}
		.img-tags img{
			height: 350px;
			object-fit: cover;
			width: 100%;
		}

	</style>

	<?php $tags_i = array_slice($post_tag, 0,3); $tags_ii = array_slice($post_tag, 3, 8);  ?>

	<div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
	        <?php foreach($tags_i as $key): ?>
	          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
	            <div>
	              <a href="<?= base_url().'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title="<?= $key['post_title']; ?>" class="mb-4 d-block img-tags">
	              	<img src="https://media1.nguoiduatin.vn/media/nguyen-hoang-yen/2018/08/25/nhaphuongtruonggianglamgisauledinhhon.jpg" alt="<?= $key['post_title']; ?>" class="img-fluid rounded">
	              </a>
	              <h2 class="font-size-24"><a href="<?= base_url().'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h2>
	              <p><?= $key['post_intro']; ?></p>
	              <p><a href="<?= base_url().'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title="<?= $key['post_title']; ?>">Read More</a></p>
	            </div>
	          </div>
	        <?php endforeach; ?>
        </div>
      </div>
    </div>

	<section class="blog-me pt-20 pb-10" id="blog">
      <div class="container">


        <div class="row mt-3">
        	<div class="col-lg-12">
        		<div class="row">
        			<?php foreach($tags_ii as $key): ?>
        			<div class="col-lg-6 col-sm-12 mb-4 post-media">
        				<div class="media">
  						    <img src="https://media1.nguoiduatin.vn/media/nguyen-hoang-yen/2018/08/25/nhaphuongtruonggianglamgisauledinhhon.jpg" class="mr-3" alt="<?= $key['post_title']; ?>" width="35%">
    						  <div class="media-body">
    						    <h5 class="mt-1"><a href="<?= base_url().'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h5>
    						    <?= $key['post_intro']; ?>.
    						  </div>
  						</div>
        			</div>
                    
        			<?php endforeach; ?>

        		</div>
        	</div>

        </div>

        <div class="mt-3" id="pagination">
        	<?php if ($pager) :?>
  			    <?php $pagi_path = base_url().'/'.getenv('pagi_path').$tags; ?>
  			    <?= $pager->links() ?>
  			  <?php endif ?>
        </div>
      </div>
  	</section>

	


<?= $this->endSection() ?>

<?= $this->section('meta') ?>


<?= $this->endSection() ?>