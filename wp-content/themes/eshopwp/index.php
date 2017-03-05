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
        <div class="bgslide" style="background-image: url('<?php bloginfo('template_url') ?>/img/slide1.jpg');"></div>
        <div class="container-fliuid">
          <div class="carousel-caption slide1">
            <h1>Интернет-магазин 
              детской одежды 
              в Полоцке 
              и Новополоцке</h1>
            <a href="#" class="btn-slide1">Посмотреть каталог</a>
          </div>
        </div>
      </div>
      <div class="item">
        <!-- <img src="<?php bloginfo('template_url') ?>/img/slide2.jpg" alt="..."> -->
        <div class="bgslide" style="background-image: url('<?php bloginfo('template_url') ?>/img/slide2.jpg');"></div>
        <div class="container-fliuid">
          <div class="carousel-caption slide2">
            <h1>Доставка по 
              Полоцку и Новополоцку 
              бесплатно</h1>
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
    <h3>Добро пожаловать в интернет-магазин детской одежды Полоцка и Новополоцка Mixikids.by. 
    Мы всегда рады новым покупателям!</h3>
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
            <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
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