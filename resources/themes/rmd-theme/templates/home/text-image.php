<?php
    echo '<div class="section-image-text container">';
        if( have_rows('home_texte_image_repeater') ):

            while( have_rows('home_texte_image_repeater') ) : the_row();
                $index = get_row_index();
                $imageId = get_sub_field('image');
                $image = wp_get_attachment_image_src($imageId, 'image-slide')[0];
                $pdf = get_sub_field('pdf');
                $text = get_sub_field('text');
                $position = get_sub_field('position');
                $class = ( $index % 2 === 0 ) ? 'bloc_paire' : 'bloc_impaire';
                ?>
                
                <div class="section-image-text__bloc <?= $class; ?>">
                
                    <a
                        class="section-image-text__bloc__img"
                        href="<?= $pdf['url']; ?>"
                        download="<?= $pdf['url']; ?>"
                    >
                        <img src="<?= $image; ?>" alt="">
                        <!-- <iframe src="<?//= $pdf['url']; ?>" frameborder="0" height="500" allow="fullscreen" loading="lazy"></iframe> -->
                    </a>

                    <div class="section-image-text__bloc__text">
                        <?= $text; ?>
                    </div>

                </div>

                <?php
            endwhile;

        endif;
    echo '</div>';

