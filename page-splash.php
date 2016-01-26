<?php Themewrangler::setup_page();get_header('splash' /***Template Name: Splash */); ?>

<div id="splash">
  <div id="splash--centered">
    <div class="fs-rows">
      <div class="fs-cells fs-all-full fs-centered text-center">
        <div class="carousel carousel_fade" data-carousel-options='{"single":true,"controls":false,"pagination":false,"infinite":true}'>
          <?php 
            $slides = get_field('slideshow');
            foreach ($slides as $image):
          ?>
          <div class="carousel_slide"><img src="<?php echo $image['sizes']['gallery-lg']; ?>" class="img-responsive" /></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer('splash'); ?>