<?= $this->extend('site/layout') ?>

<?= $this->section('main_content') ?>
<style>

	hr {
	  margin-bottom: 16px;
	  border: 1px solid #eaeaea;
	}

	.border-card {
	  background: #fff;
	  margin-bottom: 10px;
	  display: flex;
	  align-items: center;
	  font-family: "Roboto";
	  font-size: 14px;
	  padding: 12px 16px;
	  /*cursor: pointer;*/
	  border-radius: 4px;
	  border: 1px solid #eaeaea;
	  box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
	  transition: all 0.25s ease;
	}
	.border-card:hover {
	  -webkit-transform: translateY(-1px);
	          transform: translateY(-1px);
	  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1), 0 5px 10px 0 rgba(0, 0, 0, 0.1);
	}
	.border-card.over {
	  background: rgba(70, 222, 151, 0.15);
	  padding-top: 24px;
	  padding-bottom: 24px;
	  border: 2px solid #47DE97;
	  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0), 0 5px 10px 0 rgba(0, 0, 0, 0);
	}
	.border-card.over .card-type-icon {
	  color: #47DE97 !important;
	}
	.border-card.over p {
	  color: #47DE97 !important;
	}

	.content-wrapper {
	  width: 100%;
	  transition: all 0.25s ease;
	}



	.card-type-icon {
	  flex-grow: 0;
	  flex-shrink: 0;
	  margin-right: 16px;
	  font-weight: 400;
	  color: #323232;
	  border-radius: 50%;
	  width: 40px;
	  height: 40px;
	  text-align: center;
	  line-height: 40px;
	  font-size: 14px;
	  transition: all 0.25s ease;
	}
	.card-type-icon.with-border {
	  color: #aeaeae;
	  border: 1px solid #eaeaea;
	}
	.card-type-icon i {
	  line-height: 40px;
	}


	.label-group p {
	  margin: 0px;
	  line-height: 21px;

	}
	.label-group p.title {
	  color: #323232;
	  font-weight: 500;
	}
	.title a{
		font-weight: bold;
		color: #000;
	}
	.title a:hover{
		color: #219afc;
	}
	.items2 a{
		color: #fff;
	}

	.items2 a:hover{
		color: #1e2021;
	}
</style>

<nav aria-label="breadcrumb" class="container mt-5 mb-3">
  <ol class="breadcrumb" style="background: #38a4fc; border-radius: 0">
    <li class="breadcrumb-item"><a style="color: #cdd0d1; font-weight: bold;" href="<?= base_url() ?>">Home</a></li>
    <li class="breadcrumb-item items2" aria-current="page"><a href="<?= $page_detail->page_slug ?>"><?= $page_detail->page_title ?></a></li>
  </ol>
</nav>

<section class="site-section">
  <div class="container" >
    <div class="row" >
      <div class="col-md-8 blog-content">
      	<div class="card">
		  <h1 class="card-header lead text-black font-size-24 text-bold" style="font-weight: bold; font-size: 24px;"><?= $page_detail->page_title ?></h1>
		  <div class="card-body text-black">
		    <p class="card-text text-black font-size-16"><?= $page_detail->page_content ?></p>
		  </div>
		</div>

        <div style="clear: both;"></div>

      </div>





      <div class="col-md-4 sidebar">

      	<?php if($view ): ?>
	      	<div class="card">
	      		<div class="card-header">
	      			<h3 class="pt-1 font-size-24" style="color: #3b3b3b; font-weight: bold;">Most View</h3>
	      		</div>
	      	</div>
			<hr>
			<?php $i = 0 ?>
			<?php foreach($view as $key): ?>
				<div class="border-card">
					<div class="card-type-icon with-border"><?= $i += 1 ?></div>
					<div class="content-wrapper">

						<div class="label-group">
							<h1 class="title font-size-16"><a href="<?= base_url().'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['post_id'].'.html' ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h1>
						</div>
						<div class="label-group">
							<p class="title"><?= $key['post_intro']; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>

        <div class="sidebar-box mt-3">
          <div class="categories">
            <h2 class="font-size-22 pb-1" style="color: #3b3b3b; font-weight: bold;">Danh Mục</h2>
            <?php foreach($cate_info as $key): ?>
                <?php if($key['parent_cate_id'] == 0): ?>
            		<li><a href="<?= $key['cate_slug'] ?>" title = "<?= $key['cate_name'] ?>"><?= $key['cate_name'] ?></a></li>
            	<?php endif; ?>
            <?php endforeach; ?>
            <!-- <li><a href="#">Web Development <span>(14)</span></a></li> -->
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('meta') ?>


<?= $this->endSection() ?>