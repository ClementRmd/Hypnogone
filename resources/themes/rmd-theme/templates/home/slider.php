<?php 
    $images = get_field('galerie_photo');

    if( $images ): ?>

    <div class="splide slider-home">
        <div class="splide__track">
            <ul class="splide__list">
                <?php 
                    foreach( $images as $imageId ):
                        $image = wp_get_attachment_image_src($imageId, 'image-slide')[0];
                        $imageFull = wp_get_attachment_image_src($imageId, 'full')[0];
                    ?>

                    <a
                        class="splide__slide slider-home--img"
                        href="<?= $image; ?>"
                        target="_blank"
                    >
                        <div class="picture">
                            <img src="<?= $image; ?>" alt="">
                        </div>
                    </a>
                    
                    <?php
                    endforeach;
                ?>
            </ul>
        </div>
    </div>

    <?php
    endif;
?>
