<?php get_header(); ?>
<div class="wrapper">
<div class="main-content catalog">
  <div class="container-fluid">
    <div class="content-container">
      <div class="breadcr">
        <?php
          if(function_exists('bcn_display'))
            {
              bcn_display();
            }
        ?>
      </div>
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php else: ?>
        <p class="no-rez">По вашему запросу ничего не найдено</p>
      <?php endif; ?>
      <div class="nav_link">
        <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
</div>