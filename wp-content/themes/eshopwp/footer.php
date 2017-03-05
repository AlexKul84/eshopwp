<?php wp_footer(); ?>
<div class="footer">
  <div class="bottom-menu">
    <nav class="navbar navbar-default">
      <div class="container-fliuid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bottom-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bottom-menu">
          <ul class="nav navbar-nav navbar-left">
            <?php wp_list_pages('title_li='); ?>
            <!-- <li><a href="#">Главная</a></li>
            <li><p class="navbar-text">|</p></li>
            <li><a href="#">Каталог</a></li>
            <li><p class="navbar-text">|</p></li>
            <li><a href="#">О нас</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="https://new.vk.com/mixikidsby" id="vk_up"></a>
            </li>
            <li>
              <a href="http://ok.ru/mixikidsby" id="ok_up"></a>
            </li>
          </ul>
        </div><!-- .navbar-collapse --> 
      </div><!-- .container-fliuid --> 
    </nav>
  </div><!--.bottom-menu--> 
<section class="copyright">
  <div class="container-fliuid">
    <p>© 2016 eshopwp.by. Все права защищены.</p>
  </div>
</section>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/jquery-3.0.0.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/bootstrap.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/npm.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/scripts.js"></script>
</body>
</html>