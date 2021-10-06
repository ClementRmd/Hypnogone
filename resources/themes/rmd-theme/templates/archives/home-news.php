<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 2,
  'order_by' => 'date',
  'order' => 'DESC',
);

$the_query = new WP_Query( $args );
?>

<div class="home-news" id="news">
  <div class=container>
    <div class="blocTitleHome">
      <h2>Les nouveautées</h2>
    </div>
    <?php 
      if( $the_query->have_posts() ) :
        echo '<div class="home-news__container">';
          while( $the_query->have_posts() ) :
            $the_query->the_post();
            $title = get_the_title();
            $text = substr(get_the_content(), 0, 160);
            $picture = get_the_post_thumbnail_url('taille_1');
          ?>
            <div class="home-news__container__bloc">
              <div class="post-picture">
                <?= the_post_thumbnail( 'taille_1' ); ?>
              </div>
              <div class="bloc-post">
                <div class="bloc-post__content">
                  <h3><?= $title; ?></h3>
                  <p><?= $text; ?> [...]</p>
                  <a href="#" class="button">Lire la suite</a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; 
    wp_reset_postdata(); ?>
    <div class="blocButton">
      <a href="<?php echo get_permalink(59); ?>" class="button">Voir tous les articles</a>
    </div>
  </div>
</div>
  
  

