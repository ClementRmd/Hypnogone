<?php
  global $post;
  $post_id = $post->ID;
  $group_slider = get_field('slider_histoire', $post_id);
  $firstText = $group_slider['first_text'];
  $secondText = $group_slider['second_text'];
  $thirdText = $group_slider['third_text'];

?>
<div class="container">
  <div class="blocTitleHome">
    <h2>Il était une fois...</h2>
  </div>
  <div class="slider__history">
    <div class="slider__history__slide">
      <?= $firstText; ?>
    </div>
    <div class="slider__history__slide">
      <?= $secondText; ?>
    </div>
    <div class="slider__history__slide">
      <?= $thirdText; ?>
    </div>
  </div>
</div>