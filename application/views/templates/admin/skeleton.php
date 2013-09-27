<!doctype html>
  <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
  <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
  <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $meta['title'] ?></title>
    <meta name="description" content="<?php echo $meta['description'] ?>" />
    <meta name="viewport" content="width=device-width">
    <meta name="keywords" content="<?php echo $meta['keywords'] ?>" />
    <meta name="author" content="<?php echo $meta['author'] ?>" />

    <?php
    /*
    | -------------------------------------------------------------------
    | Setup third party libraries
    | -------------------------------------------------------------------
    */
    ?>
    <!-- JQuery -->
    <script src="<?php echo asset_vendor_url('jquery/jquery-1.10.2.min.js') ?>"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo asset_vendor_url('bootstrap/css/bootstrap.min.css') ?>" media="screen">
    <link rel="stylesheet" href="<?php echo asset_vendor_url('bootstrap/css/bootstrap-responsive.min.css') ?>" media="screen">
    <script src="<?php echo asset_vendor_url('bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Modernizr -->
    <script src="<?php echo asset_vendor_url('modernizr/modernizr-2.6.2.min.js') ?>"></script>
    <script src="<?php echo asset_vendor_url('modernizr/modernizr-2.6.2-respond-1.1.0.min.js') ?>"></script>

    <!-- Template's main css file -->
    <link rel="stylesheet" href="<?php echo asset_css_url('admin/main.css') ?>" media="screen">

    <!-- controller loaded css -->
    <?php foreach($assets['css'] as $css):?>
      <link rel="stylesheet" href="<?php echo asset_css_url($css) ?>" media="screen">
    <?php endforeach;?>

    <!-- controller loaded fonts -->
    <?php foreach($assets['fonts'] as $font):?>
      <link href="http://fonts.googleapis.com/css?family=<?php echo $font?>" rel="stylesheet" type="text/css">
    <?php endforeach;?>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo asset_img_url('ico/favicon.ico');?>">
    <?/*
    <link rel="apple-touch-icon" href="<?php echo base_url(IMAGE_DIR.'ico/apple-touch-icon-precompresse.png');?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(IMAGE_DIR.'ico/apple-touch-icon-57x57-precompressed.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(IMAGE_DIR.'ico/apple-touch-icon-72x72-precompressed.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(IMAGE_DIR.'ico/apple-touch-icon-114x114-precompressed.png');?>">
    */?>
  </head>

  <body>
    <?php echo $partials['navbar'] ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <?php echo $partials['sidebar'] ?>
        <div class="span9" id="content">
            <div class="row-fluid">
                <?php
                  if (!empty($partials['systemMsg'])) echo $partials['systemMsg']
                ?>
                <?php echo $partials['breadcrumbs'] ?>
            </div>
            <?php echo $partials['main'] ?>
        </div>
      </div>
    </div>

    <?php echo $partials['footer'] ?>

    <!-- controller loaded js -->
    <?php foreach($assets['js'] as $js):?>
      <script src="<?php echo asset_js_url($js) ?>"></script>
    <?php endforeach;?>
  </body>
</html>