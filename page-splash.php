<?php Themewrangler::setup_page();get_header('splash' /***Template Name: Splash */); ?>

<div id="splash">
  <div id="splash--centered">
    <div class="fs-row">
      <div class="fs-cell fs-all-full fs-sm-hide"><img src="/assets/img/thefowlerlogo.svg" class="img-responsive" /></div>
      <div class="fs-cell fs-all-full fs-md-hide fs-lg-hide"><img src="/assets/img/thefowlerlogo_mobile.svg" class="img-responsive" /></div>
      <div class="fs-cell fs-all-full desc"><?php the_post(); the_content(); ?></div>
    </div>
  </div>
  <div id="splash_gallery">
    <a href="#" class="ss-gizmo ss-delete swap toggle_group_1" data-swap-target="#splash_gallery" data-swap-linked=".toggle_group_1"></a>
    <div id="splash_gallery--centered">
      <div class="fs-row">
        <div class="fs-cell fs-xl-8 fs-lg-9 fs-md-6 fs-sm-3 fs-centered ">
          <div class="carousel" data-carousel-options='{"paged":true,"show":1,"autoHeight":true}'>
            <?php 
              $slides = get_field('gallery');
              foreach ($slides as $image):
            ?>
            <div class="carousel_slide"><img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" /></div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="splash_bg-one" class="covered wallpaper" data-background-options='{"source":"/wp-content/uploads/2016/01/fowler_house.jpg"}'></div>
  <div id="splash_bg-two" class="covered wallpaper" data-background-options='{"source":"/wp-content/uploads/2016/01/SE-CORNER-copy.jpg"}'></div>
</div>

<?php get_footer('splash'); ?>
