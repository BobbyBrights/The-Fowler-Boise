<footer id="footer" class="pinned-bottom">
  <div class="fs-row">
    <div class="fs-cell fs-lg-third fs-md-half fs-sm-full">
      <a href="http://localconstruct.com" class="btn--nav btn--logo" target="_blank">Local Construct</a>
      <a href="http://localconstruct.com" class="btn--nav" target="_blank">&nbsp;&nbsp;</a>
      <a href="http://localconstruct.com" class="btn--nav" target="_blank">localconstruct.com</a>
    </div>
    <hr class="divider compact fs-cell fs-lg-hide fs-md-hide fs-sm-3">
    <div class="fs-cell fs-lg-third fs-md-half fs-sm-full">
      <div class="text-center">
        <a href="#" class="btn--nav swap toggle_group_1" data-swap-target="#splash_gallery" data-swap-linked=".toggle_group_1">View Renderings</a> | 
        <a href="#subscribe-modal" class="btn--nav modal-btn">Stay Updated</a>
        <!--
        <span class="btn--nav">|</span>
        <a href="$" class="btn--nav">Stay Updated</a>
        -->
      </div>
    </div>
    <hr class="divider compact fs-cell fs-lg-hide fs-md-hide fs-sm-3">
    <div class="fs-cell fs-lg-third fs-md-full fs-sm-full">
      <div class="text-right">
        <span class="btn--nav"><a class="underline" href="mailto:info@thefowlerboise.com">info@thefowlerboise.com</a> | 208-629-4066</span>
      </div>
    </div>
  </div>
</footer>

</div>
</div><!--Wrapper-->
<?php wp_footer(); ?>

<div id="subscribe-modal" class="modal mfp-hide">
  <?php echo do_shortcode('[gravityform id="1" title="true" description="true" ajax="true"]' ); ?>
</div>

</body>
</html>
