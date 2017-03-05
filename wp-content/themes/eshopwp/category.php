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
            <div class="product-row">
            <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <div class="product-cat">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_content(); ?>
              </div>
              <div class="clearfix"></div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="nav_link">
              <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
            </div>
            </div><!--prodact-row-->
      </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
</div>