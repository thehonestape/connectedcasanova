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
        <div class="signup">
          <form class="form-inline" role="form" action="//connectcasanova.us10.list-manage.com/subscribe/post?u=6fa75f99947f253ed5ca201d5&amp;id=4128d134e5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div class="form-group">
              <input type="name" class="form-control input-lg" placeholder="First Name" type="text" value="" name="FNAME" class="" id="mce-FNAME">
            </div>
            <div class="form-group">
              <input type="name" class="form-control input-lg" placeholder="Last Name" type="text" value="" name="LNAME" class="" id="mce-LNAME">
            </div>
            <div class="form-group">
              <input class="form-control input-lg" type="email" placeholder="Email" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
            </div>
            <input type="submit" class="btn btn-lg btn-primary" value="Sign Up" name="subscribe" id="mc-embedded-subscribe">
          </form>
        </div>
      </div>
      <div class="about-banner row">
        <div class="col-lg-6 nopadding">
          <div class="about-photo">
            <div class="credit">Photo credit: <a href="https://www.flickr.com/photos/stephen_little/14638194904">Stephen Little</a> <a href="http://creativecommons.org/licenses/by-nc/2.0/">CC BY-NC</a></div>            
            <div class="intro">
            <h4 class="title">About</h4>
            <p class="lead">This website is the voice of <em>The Neighborhood Committee for Stronger, More Reliable Data and Voice Service</em>.</p> 
            <p>The committee consists of Casanova residents responding to inadequate, unreliable cell and internet signal. We are not affiliated with any carrier. Verizon is the only carrier currently offering a solution, and we support the proposed 150 ft Verizon Tower, to be located in Casanova. We currently speak for over 90% of residents living within one mile of the center of the village.
             </p>
             <p>
            <a href="mailto:jdmillerjack@gmail.com?Subject=Connect Casanova"><span>Spokesman: John D. Miller, jdmillerjack@gmail.com</span></a><br>
            <a class="btn btn-lg btn-default" href="mailto:jdmillerjack@gmail.com?Subject=Connect Casanova" target="_blank"> Contact</a>
            </p>
          </div>
          </div>
        </div>
        <div class="col-lg-6 nopadding">
          <div class="intro">
            <h4 class="title">About</h4>
            <p class="lead">This website is the voice of <em>The Neighborhood Committee for Stronger, More Reliable Data and Voice Service</em>.</p> 
            <p>The committee consists of Casanova residents responding to inadequate, unreliable cell and internet signal. We are not affiliated with any carrier. Verizon is the only carrier currently offering a solution, and we support the proposed 150 ft Verizon Tower, to be located in Casanova. We currently speak for over 90% of residents living within one mile of the center of the village.<br>
            </p>
            <p>
            <a href="mailto:jdmillerjack@gmail.com?Subject=Connect Casanova"><span>Spokesman: John D. Miller, jdmillerjack@gmail.com</span></a><br>
            <a class="btn btn-lg btn-default" href="mailto:jdmillerjack@gmail.com?Subject=Connect Casanova" target="_blank"> Contact</a>
            </p>
          </div>
        </div>
      </div>
      </div>
      <?php } ?>
      <main class="main col-sm-8" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

 <?php get_template_part('templates/footer'); ?>

</body>
</html>
