<?php 
  $images = get_field('galerie_photo');

  if( $images ): ?>
    <div class="homeslider">
      <div class="glide slider">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <?php 
              foreach( $images as $imageId ):
                $image = wp_get_attachment_image_src($imageId, 'image-slide')[0];
                $imageFull = wp_get_attachment_image_src($imageId, 'full')[0];
                ?>

                  <li class="glide__slide">
                    <div class="picture" data-img="<?= $imageFull; ?>">
                      <img src="<?= $image; ?>" alt="">
                      <!-- <span><i class="fas fa-search-plus 4x"></i></span> -->
                    </div>
                    <div class="overlay"></div>
                  </li>

                <?php
              endforeach; 
            ?>
          </ul>
        </div>
      </div>
    </div>
  <?php
  else :
    error_log("hypnogone error: Problème repeater slider home");
  endif;
?>
