
<div class="footerPartners">
  <?php if( have_rows('list_partners', 'options') ): ?>
    <div class="glide glide-partner">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <?php while( have_rows('list_partners', 'options') ) : the_row();
            $logo = get_sub_field('logo');
          ?>

          <li class="glide__slide footer-partners__bloc">
            <img src="<?= $logo['url']; ?>" alt="">
          </li>

          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  <?php else : ?>
  <?php endif; ?>
</div>