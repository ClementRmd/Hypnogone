<?php
  $header_acf_image_id = get_field('logo', 'options');
  $header_acf_image = wp_get_attachment_image($header_acf_image_id, ['170', '200']);
  $header_acf_slogan = get_field('slogan', 'options');
?>

<div class="header">
  <!-- <div class="header__img" style="background-image:url(<?//= IMAGES_URL; ?>/book.png)"></div> -->
  <div class="header__container">
    <div class="header__container__logo">
      <a href="#">
        <?= $header_acf_image; ?>
        <span><?= $header_acf_slogan; ?></span>
      </a>
    </div>
    <div class="header__container__menu">
      <!-- btnText -->
      <?php 
        wp_nav_menu( array(
          'theme_location'=> 'header',
        ) ); 
      ?>
    </div>
  </div>
</div>