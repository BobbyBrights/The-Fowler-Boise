<?php Themewrangler::setup_page();get_header('splash' /***Template Name: Splash */); ?>

<div id="splash" class="wallpaper" data-background-options='{"source":"/wp-content/uploads/2016/01/fowler_house.jpg"}'>
  <div id="splash--centered">
    <div class="fs-row">
      <div class="fs-cell fs-all-full fs-sm-hide"><img src="/assets/img/thefowlerlogo.svg" class="img-responsive" /></div>
      <div class="fs-cell fs-all-full fs-md-hide fs-lg-hide"><img src="/assets/img/thefowlerlogo_mobile.svg" class="img-responsive" /></div>
    </div>
  </div>
  <div id="splash_gallery">
    <a href="#" class="ss-gizmo ss-delete swap toggle_group_1" data-swap-target="#splash_gallery" data-swap-linked=".toggle_group_1"></a>
    <div id="splash_gallery--centered">
      <div class="fs-row">
        <div class="fs-cell fs-xl-10 fs-lg-10 fs-md-6 fs-sm-3 fs-centered ">
          <div class="carousel" data-carousel-options='{"paged":true,"show":1}'>
            <?php 
              $slides = get_field('gallery');
              foreach ($slides as $image):
            ?>
            <div class="carousel_slide"><img src="<?php echo $image['sizes']['gallery-lg']; ?>" class="img-responsive" /></div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer('splash'); ?>
