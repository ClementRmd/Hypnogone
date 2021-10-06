<?php
  $instagram = get_field('social_network');
?>

<div class="home-social container">
  <div class="blocTitleHome">
    <h2>Suivez nous!</h2>
  </div>
  <div class="home-social__insta">
    <?= do_shortcode( $instagram ); ?>
  </div>
</div>
