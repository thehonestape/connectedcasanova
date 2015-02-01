<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <?php if (is_front_page()){?>
      <div class="banner top-message">
        <div class="branding"></div>
        <hr>
        <h1>Better Communication. Better Community.</h1>
        <hr>
        <h3>Improved cell phone and internet coverage is improved quality of life. Sign up for updates to find out how you can help us drastically improve cell phone and internet coverage in our community. </h3>
        <a href="/" class="disabled btn btn-primary btn-lg">Sign Up</a>
      </div>
      <?php } ?>
<?php /*
      <main class="main col-sm-8" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
      */ ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

 <?php get_template_part('templates/footer'); ?>

</body>
</html>
