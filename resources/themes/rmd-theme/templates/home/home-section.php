<?php
  $title = get_field('title_section_home');
  $text = get_field('text_section_home');
  $imageId = get_field('image_section_home');
  $image = wp_get_attachment_image_src($imageId, 'image-slide')[0];
  $position = get_field('position_image_section_home');
?>

<div class="bg_blue home-section">
  <div class="bloc_section">
    <div class="bloc_section__picture">
      <img src="<?= $image; ?>" alt="">
    </div>
    <div class="bloc_section__text">
      <h3><?= $title; ?></h3>
      <div class="wysiwyg"><?= $text; ?></div>
    </div>
  </div>
</div>