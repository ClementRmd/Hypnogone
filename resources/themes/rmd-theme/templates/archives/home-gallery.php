<?php
  $bloc_meow_image = get_the_content();
?>

<div class=container>
  <div class="blocTitleHome">
    <h2>Quelques photos</h2>
  </div>
  <div class="gallery">
    <?= do_shortcode($bloc_meow_image); ?>
  </div>
</div>