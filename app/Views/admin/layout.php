
<?= $this->include('admin/header'); ?>



<?= $this->renderSection('content') ?>

<?= $this->include('admin/footer'); ?>

<?= session()->get('notice') ?>
back end

<h1><a href="auth/logout">Logout</a></h1>
