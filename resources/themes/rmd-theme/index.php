<?php

get_header();

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    
    get_template_part('templates/home/hero');
    get_template_part('templates/home/text-image');
    get_template_part('templates/home/slider');
   
  endwhile;
endif;

wp_reset_postdata();

get_footer();