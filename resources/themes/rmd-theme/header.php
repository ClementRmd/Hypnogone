<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>Hypnogone</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css"> -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="overlayPopup"></div>
    <?php get_template_part('templates/header/header', 'main'); ?>
    <div class="wrapper">
      <ul class="background-animate">
        <?php for ($i=0; $i <= 8 ; $i++) { ?>
          <li></li>
        <?php } ?>
      </ul>

<!--  style="background-image:url(<?//= IMAGES_URL; ?>/blueStar.png); -->