<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Error 404</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('/'); ?>/public/site_asset/css/bootstrap.min.css">
    <style type="text/css">
        body {
    background: #eee;
}
.container{
    padding:5%;
}
.lead{
    background:#fff;
    padding:4%;
}
    </style>

</head>
<body>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">Oops! We can't seem to find the page you are looking for.</div>
                <a href="<?php echo base_url(''); ?>" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>
