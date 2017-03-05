<?php
/*
Template Name: glavnaya
*/
?>

<?php get_header(); ?>
<!-- Карусель -->
<section class="menu-carousel">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators-wrap">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
      </ol>
    </div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <!-- <img src="<?php bloginfo('template_url') ?>/img/slide1.jpg" alt="..."> -->
        <div class="bgslide" style="background-image: url('<?php bloginfo('template_url'); ?>/img/slide1.jpg');"></div>
        <div class="container-fliuid">
          <div class="carousel-caption slide1">
            <h1>Краткое описание Интернет-магазина. Призыв к действию</h1>
            <a href="#" class="btn-slide1">Посмотреть каталог</a>
          </div>
        </div>
      </div>
      <div class="item">
        <!-- <img src="<?php bloginfo('template_url') ?>/img/slide2.jpg" alt="..."> -->
        <div class="bgslide" style="background-image: url('<?php bloginfo('template_url'); ?>/img/slide2.jpg');"></div>
        <div class="container-fliuid">
          <div class="carousel-caption slide2">
            <h1>Второй призыв к действию. Описание приемуществ</h1>
            <a href="#" class="btn-slide2">Узнать подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Приветствие -->
<section class="main-name">
  <div class="container-fliuid">
    <h3>Подробное описание магазина. Описание приемуществ. Призывы к действию.</h3>
  </div>
</section>
<!-- Контент -->
<div class="wrapper">
<div class="main-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 col-md-push-3 content">
        <!-- Основной контент -->
          <h3>Новинки</h3>
            <div class="product-row clearfix">
<!--             <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?> -->
                  <?php if(have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                      <div class="col-lg-4 col-sm-6">
                        <div class="product">
                          <div class="product-content">
                            <div class="product-img">
                              <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                  <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                  <img src="<?php bloginfo('template_url'); ?>/img/product-img.jpg" alt="">
                                <?php endif; ?>
                              </a>
                            </div>
                            <p class="product-title">
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </p>
                            <p class="product-desc">
                              Описание товара 1 Описание товара 1 Описание товара 1 Описание товара 1 Описание товара 1 Описание товара 1 Описание товара 1
                            </p>
                            <div class="product-buy">
                              <p class="product-price col-xs-6">
                                <span>30</span> бел. руб.
                              </p>
                              <p class="col-xs-6">
                                <a href="#" class="btn btn-default">Детали</a>
                              </p>
                            </div>
                          </div><!--product-content-->
                        </div><!--prodact-->
                      </div>
                    <?php endwhile; ?>
                    <?php endif; ?>


            </div><!--prodact-row-->
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
</div>