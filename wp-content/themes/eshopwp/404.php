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
      <p class="no-rez">Такой страницы не существует</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>
</div>