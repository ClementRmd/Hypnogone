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
  <div class="glide glide__history">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <li class="glide__slide">
          <div class="glide__history__bloc">
            <?= $firstText; ?>
          </div>
        </li>
        <li class="glide__slide">
          <div class="glide__history__bloc">
            <?= $secondText; ?>
          </div>
        </li>
        <li class="glide__slide">
          <div class="glide__history__bloc">
            <?= $thirdText; ?>
          </div>
        </li>
      </ul>
    </div>
    <div class="glide__bullets" data-glide-el="controls[nav]">
      <button class="glide__bullet" data-glide-dir="=0"></button>
      <button class="glide__bullet" data-glide-dir="=1"></button>
      <button class="glide__bullet" data-glide-dir="=2"></button>
    </div>
  </div>
</div>