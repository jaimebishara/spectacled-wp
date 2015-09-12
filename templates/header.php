<header class="banner" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
         <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class='logo' src="<?php echo get_template_directory_uri(); ?>/assets/images/spectacledlogo.png"></a>
      </div>
    </div>
    <nav role="navigation" class="col-sm-9">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
