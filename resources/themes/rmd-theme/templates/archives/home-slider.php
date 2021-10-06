<?php
  // $title  = get_field('title_section_gallery');
  $slider = get_field('repeater_slider')
?>

<div class="homeslider">
  <?php if( have_rows('repeater_slider') ): ?>
    <div class="glide glide-home">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <?php
            while( have_rows('repeater_slider') ) : the_row();
              $sub_field_img  = get_sub_field('img');
              $sub_field_text = get_sub_field('text');
          ?>

            <li class="glide__slide homeslider__slide">
              <img src="<?= $sub_field_img['url']; ?>" alt="">
            </li>

          <?php endwhile; ?>
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
      </div>
      <div class="glide__bullets" data-glide-el="controls[nav]">
        <?php
          while( have_rows('repeater_slider') ) : the_row(); ?>
            <button class="glide__bullet" data-glide-dir="=<?php echo get_row_index() - 1; ?>"></button>
          <?php endwhile;
        ?>
      </div>
    </div>
  <?php
    else :
      
    endif;
  ?>
</div>
