<?php get_header(); ?>

<!-- Контент -->
<div class="wrapper">
<div class="main-content catalog1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 col-md-push-3 content">
        <!-- Основной контент -->
          <div class="breadcr">
            <?php
              if(function_exists('bcn_display'))
                {
                  bcn_display();
                }
            ?>
          </div>
            <div class="product-row clearfix">
            <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
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