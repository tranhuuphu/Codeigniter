<!DOCTYPE html>
<html>
<head>
	<?= $this->include('admin/header'); ?>
</head>




	<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

	<?= $this->include('admin/nav'); ?>


		<div class="content-wrapper">
			<?= $this->renderSection('content') ?>
		</div>
	</div>

		<?= $this->include('admin/footer'); ?>

	</body>
</html>






