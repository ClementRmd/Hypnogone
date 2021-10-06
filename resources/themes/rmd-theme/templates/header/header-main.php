<?php
  $header_acf_image_id = get_field('logo', 'options');
  $header_acf_image = wp_get_attachment_image($header_acf_image_id, ['170', '200']);
  $header_acf_slogan = get_field('slogan', 'options');
  $home_link = home_url();
  $home_alt = 'Page d\'accueil'
?>

<div class="header">
  <div class="header__container">
    <div class="header__container__logo">
      <a href="<?= $home_link; ?>" title="<?= $home_alt; ?>">
        <?= $header_acf_image; ?>
        <span><?= $header_acf_slogan; ?></span>
      </a>
    </div>
    <div class="header__container__menu">
      <?php 
        wp_nav_menu( array(
          'theme_location'=> 'header',
        ) ); 
      ?>
    </div>
  </div>
</div>