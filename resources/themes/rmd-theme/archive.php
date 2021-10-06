<?php 
  get_header();
  ?>

  <div class="archive" style="background-image: url(<?= IMAGES_URL; ?>/blueStar.png;)">
    <?php get_template_part('templates/hub/posts'); ?>
  </div>

  <?php
  get_footer();
