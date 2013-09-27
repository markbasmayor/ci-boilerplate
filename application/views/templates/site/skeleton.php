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

    <?php /*--- Bootstrap ---*/ ?>
    <link rel="stylesheet" href="<?php echo base_url(CSS_DIR."bootstrap.min.css");?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(CSS_DIR."bootstrap-responsive.min.css");?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(CSS_DIR."style.css");?>" media="screen">
    <script src="<?php echo base_url().JS_DIR."libs/modernizr-2.6.2.min.js" ?>"></script>

    <?php /*--- controller loaded css ---*/ ?>
    <?php foreach($assets['css'] as $css):?>
      <link rel="stylesheet" href="<?php echo base_url().CSS_DIR.$css ?>" media="screen">
    <?php endforeach;?>

    <?php /*--- controller loaded fonts ---*/ ?>
    <?php foreach($assets['fonts'] as $font):?>
      <link href="http://fonts.googleapis.com/css?family=<?php echo $font?>" rel="stylesheet" type="text/css">
    <?php endforeach;?>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(IMAGE_DIR.'ico/favicon.ico');?>">
    <link rel="apple-touch-icon" href="<?php echo base_url(IMAGE_DIR.'ico/apple-touch-icon-precompresse.png');?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(IMAGE_DIR.'ico/apple-touch-icon-57x57-precompressed.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(IMAGE_DIR.'ico/apple-touch-icon-72x72-precompressed.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(IMAGE_DIR.'ico/apple-touch-icon-114x114-precompressed.png');?>">

  </head>
  <body>
    <?/*--- loading view --- */ ?>
    <?php echo $body ?>

    <?php /*--- Javascript ---*/ ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(JS_DIR."libs/jquery-1.10.2.min.js");?>"><\/script>')</script>
    <script src="<?php echo base_url(JS_DIR."libs/underscore-min-1.5.0.js");?>"></script>
    <script src="<?php echo base_url(JS_DIR."plugins.js");?>"></script>
    <script src="<?php echo base_url(JS_DIR."script.js");?>"></script>

    <?php /*--- controller loaded js ---*/ ?>
    <?php foreach($assets['js'] as $js):?>
      <script src="<?php echo base_url().JS_DIR.$js ?>"></script>
    <?php endforeach;?>

  </body>
</html>
