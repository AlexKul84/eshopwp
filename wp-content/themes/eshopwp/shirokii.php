<?php
/*
Template Name: shirokii
*/
?>
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
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
</div>
<?php get_footer(); ?>
</div>