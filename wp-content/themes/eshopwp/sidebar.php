<div class="col-md-3 col-md-pull-9 sidebar">
      <div class="widget">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Категории')) : ?>
          <p>Здесь будут категории</p>
        <?php endif; ?>
    </div>
</div>