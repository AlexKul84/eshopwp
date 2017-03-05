<!DOCTYPE html>
<html lang="en">
<head profile="http://gmpg.org/xfn/11">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
  <link href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php //comments_popup_script(); // off by default ?>
  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800" rel="stylesheet">
  <!-- <link href="css/style.css" rel="stylesheet"> -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="on-top glyphicon glyphicon-chevron-up" onclick="toTop()"></div>
  <header>
    <div class="top-menu">
      <nav class="navbar navbar-default">
        <div class="container-fliuid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><p id='logo'>ESHOPWP</p><p id='logo_disc'>краткое описание сайта</p></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <p class="navbar-text navbar-right"><span class="glyphicon glyphicon-envelope"></span>eshopwp@mail.ru</p>
              </li>
              <li>
                <p class="navbar-text navbar-right"><span class="glyphicon glyphicon-earphone"></span>+375 55 555 55 55</p>
              </li>
              <li>
                <a href="https://new.vk.com/mixikidsby" id="vk_up"></a>
              </li>
              <li>
                <a href="http://ok.ru/mixikidsby" id="ok_up"></a>
              </li>
            </ul>
          </div><!-- .navbar-collapse -->
        </div><!-- .container-fluid --> 
      </nav>
    </div><!--.top-menu--> 
    <div class="carousel">
      <div class="main-menu">
        <nav class="navbar navbar-default">
          <div class="container-fliuid">
            <div class="main-menu-bg">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav">
                  <?php wp_list_pages('title_li='); ?>
                  <!-- <li><a href="#">Главная</a></li>
                  <li><p class="navbar-text">|</p></li>
                  <li><a href="#">Каталог</a></li>
                  <li><p class="navbar-text">|</p></li>
                  <li><a href="#">О нас</a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <form class="navbar-form navbar-left" role="search">
                      <div class="input-group">
                        <input type="text" name="s" class="form-control">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-default">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </span>
                      </div>
                    </form>
                  </li>
                  <li>
                    <div class="navbar-text cart-fon">
                    <ul class="clearfix">
                      <span class="glyphicon glyphicon-shopping-cart"></span>
                      <a href="<?php bloginfo('template_url') ?>/cart/"><?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Корзина')) : ?>
                        
                          Ваша корзина пуста
                        
                      <?php endif; ?></a>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div><!-- .navbar-collapse --> 
            </div><!--.main-menu-bg-->
          </div><!-- /.container --> 
        </nav>
      </div><!--.main-menu-->
    </div> 
</header>