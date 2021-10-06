<?php
  $footer_acf_image_id = get_field('logo', 'options');
  $footer_acf_image = wp_get_attachment_image($footer_acf_image_id, ['170', '200']);
?>

<div class="footer">
  <div class="footer__logo">
    <?= $footer_acf_image; ?>
  </div>
  <div class="footer__menus">
    <div class="footer__menus__bloc">
      <div class="footer-menu">
        <h3>Menus</h3>
        <?php 
          wp_nav_menu( array(
            'theme_location'=> 'footer',
          ) ); 
        ?>
      </div>
      <div class="footer-others">
        <div class="footer-others__social-network">
          <h3>Réseaux sociaux</h3>
          <div class="footer-others__social-network__img">
            <a href="#"><img src="<?= IMAGES_URL; ?>/facebook.png" alt=""></a>
            <a href="#"><img src="<?= IMAGES_URL; ?>/instagram.png" alt=""></a>
          </div>
        </div>
        <div class="footer-others__menu">
        
        </div>
      </div>
    </div>
    <div class="footer-infos"><a class="btnText" href="#" alt="#">Mention légales</a> | ©2020 - Réalisation Rmd-webmaster</div>
  </div>
</div>

<!-- <div class="social_network">
  <img src="<?//= IMAGES_URL; ?>/facebook.png" alt="">
  <img src="<?//= IMAGES_URL; ?>/instagram.png" alt="">
</div> -->
