<?php
/*
Template Name: Contacto
*/
?>
<?php get_header(); ?>
<!-- splash frame -->
<div id="sp-slideshow-frame">
  <div class="sp-slideshow">
    <div class="sp-slideshow-container">
      <div class="sp-slideshow-rotate"> <img src="<?php bloginfo('template_url'); ?>/images/monde.jpg" alt="example" width="750" height="144" /> </div>
    </div>

  </div>
</div>
<!-- /splash frame -->

<!-- title frame -->
<div id="sp-title-frame">
  <div class="sp-title">
    <div class="sp-title-content">
    <!-- title -->
      <div class="sp-title-content-text">
        <h1>Contact</h1>
      </div>
      <!-- /title -->
      <!-- breadcrumb -->
      <div class="sp-title-content-breadcrumbs">
      	<a href="http://nouvauvisage.fr">Home</a> &nbsp; > &nbsp; Contact
      </div>
      <!-- /breadcrumb -->

    </div>
  </div>
  <div class="clear"></div>
</div>
<!-- /title frame -->
<!-- content frame -->
<div id="ge-content-frame">
  <div class="ge-content">
    <div class="in-main-content">
    <!-- contact intro -->
      <div class="sp-content-full">
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <?php the_content(); ?><?php endwhile; ?>
<?php else : ?><?php endif; ?>
      </div>
      <!-- /contact intro -->
      <!-- contact-left -->
      <div class="sp-co-content-left">

      <!-- contact form -->
        <form method="post" action="http://s313814148.onlinehome.us/nouveauvisage/sitio/wp-content/themes/nvtema/envoie.php" id="sp-co-form">
          <fieldset>
            <p class="sp-co-form-title"><strong>Information de base</strong></p>
            <div class="sp-co-form-left">
              <label for="name">Nom <span>*</span></label>
              <input name="name" id="name" type="text" tabindex="1" />
              <label for="telephone">Téléphone <span>*</span></label>
              <input name="telephone" id="telephone" type="text" tabindex="3" />
            </div>
            <div class="sp-co-form-right">
              <label for="email">Email <span>*</span></label>
              <input name="email" id="email" type="text" tabindex="2" />
              <label for="societe">Nom de la société</label>
              <input name="societe" id="societe" type="text" tabindex="4" />
            </div>
            <p class="sp-co-form-title"><strong>Message</strong></p>
            <label for="subject">Objet <span>*</span></label>
            <input name="telecopie" id="telecopie" type="text" class="sp-co-form-subject" tabindex="5" />
            <label for="message">Message <span>*</span></label>
            <textarea name="message" id="message" cols="3" rows="9" tabindex="6"></textarea>
            <div class="clear"></div>
            <p class="left">Les champs marqués <span>*</span> sont obligatoires</p>
            <button type="submit"><span>Envoyez</span></button>
            <div class="clear"></div>
          </fieldset>
        </form>
        <!-- /contact form -->
        <!-- contact terms 
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis purus vel nunc malesuada hendrerit. Aliquam vehicula auctor velit vulputate congue.</p>-->
        <!-- /contact terms -->
      </div>
      
      <!-- contact-right -->
      
      <?php get_template_part( 'sidebarcontact', 'nosotros' ); ?>
      
      <!-- /contact-right -->
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- /content frame -->
<?php get_footer(); ?>
</body>

</html>
