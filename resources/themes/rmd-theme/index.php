<?php

get_header();

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();

    get_template_part('templates/home/home', 'slider');
   
  endwhile;
endif;

wp_reset_postdata();

get_footer();