<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url')?>/apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">

        <script src="<?php bloginfo('template_url')?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <?php wp_head();?>
    </head>
    <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="top"></div>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url')?>/img/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            
              <?php wp_nav_menu(
                  array(
                    'container'=>false,
                    'item_wrap'=>'<ul class="menu">%3$s</ul>',
                    'theme_location'=>'menu'
                    )); ?>

          <!--   <div class="form-group">
              <div class="menu">CNEB</div>
            </div>
          <div class="form-group">
              <div class="menu">PASB</div>
           </div>
           <div class="form-group">
              <div class="menu">NOTICIAS</div>
            </div>
            <div class="form-group">
              <div class="menu">CONTACTO</div> -->
            
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
