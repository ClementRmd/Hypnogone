<?php 
  $title = get_the_title();
?>

<div class="container">
  <div class="blocTitleHome">
    <h2>Nous contactez</h2>
  </div>
  <div class="contact scroll" id="contact">
    <form action="#" method="post" class="form">
      <?php
        // Permet de vérifier que le contenu d’une requête d’un formulaire provient
        // bien du site actuel, et non d’un autre site.
        wp_nonce_field( 'formcontact', 'verificationformcontact', true, true );
      ?>  
      <div class="form-group">
        <label for="name">Nom</label>
        <input class="form-control form-control-lg"id="name" type="text" name="name"/>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control form-control-lg" id="email" type="email" name="email"/>
      </div>
      <div class="form-group">
        <label for="subject">Sujet</label>
        <input class="form-control form-control-lg" id="subject" type="text" name="subject"/>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control form-control-lg" id="message" name="message" rows="5" cols="33"></textarea>
      </div>
      <input class="btn btn-primary button" id="submit" type="submit" value="Envoyer" />
    </form>
  </div>
</div>
<!-- <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.5524348967824!2d4.875027515473166!3d45.760117921670066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c1d37d856c61%3A0xd575508565dbe67c!2s12%20Rue%20Fr%C3%A9d%C3%A9ric%20Passy%2C%2069100%20Villeurbanne!5e0!3m2!1sfr!2sfr!4v1594941252816!5m2!1sfr!2sfr"
  width="650"
  height="400"
  frameborder="0"
  style="border:0;"
  allowfullscreen=""
  aria-hidden="false"
  tabindex="0">
</iframe> -->
