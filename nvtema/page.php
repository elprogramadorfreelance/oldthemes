<?php
/*
Template Name: page Nouveau Visage
*/
?>
    <?php get_header(); ?>
    

  </div>
</div>
<!-- /header -->
<!-- splash frame -->
<div id="sp-slideshow-frame">
  <div class="sp-slideshow">
    <div class="sp-slideshow-container">
      <div class="sp-slideshow-rotate">
      	<img src="<?php bloginfo('template_url'); ?>/images/monde.jpg" alt="example" width="750" height="144" />
      </div>
    </div>

  </div>
</div>
<!-- /splash frame -->

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<!-- title frame -->
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div id="sp-title-frame">
  <div class="sp-title">
    <div class="sp-title-content">
    <!-- title -->
      <div class="sp-title-content-text">
        <h1><?php the_title(); ?></h1>

      </div>
      <!-- /title -->
      <!-- breadcrumb -->   
<div class="sp-title-content-breadcrumbs">
<?php
if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
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
    <!-- content-left -->
      <div class="sp-content-left">

<?php the_content(); ?>    
      </div>
      <!-- /content-left -->
      <!-- content-right -->
      <div class="sp-content-right">
      <!-- side panel -->

        <div class="sp-side-item">
          <ul class="sp-submenu">
            <li class="title">
              <h3>Overview</h3>
            </li>
            <li><a href="equipa.html">Nuestra equipa</a></li>
            <li><a href="historial.html">Un poco de historia</a></li>

            <li><a href="#">Our Process</a></li>
            <li><a href="#">Customer Care</a></li>
          </ul>
        </div>
        <!-- /side panel -->
        <!-- side panel -->
        <div class="sp-side-item">
          <div class="sp-side-header">

            <h3>Contactarnos</h3>
          </div>
          <div class="sp-side-image"> <a href="Contacto.html"><img src="images/sp-side-placeholder.jpg" alt="example" width="230" height="134" /></a> </div>
          <div class="sp-side-text">
            <p>Estamos a sus servicios para cual quiera cuestion.</p>
            <p><a href="Contacto.html">Contactarnos por el medio de nuestro formulario.</a></p>

          </div>
        </div>
        <!-- /side panel -->
      </div>
      <!-- /content-right -->
      <!-- case studies -->
      <div class="sp-summary">
        <div class="module-header">
          <h2>Case Studies</h2>

          <div class="module-arrows"></div>
          <div class="clear"></div>
        </div>
        <div class="module-services">
          <ul id="jcarousel-content-3" class="jcarousel-skin-3">
          <!-- case study panel -->
            <li> <a href="casestudies-single.html"><img src="images/julyos.jpg" alt="example" width="230" height="134" /></a>
              <p class="ge-summary-title">Insert title here</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu dui.</p>
              <p class="ge-readmore"><a href="casestudies-single.html"><strong>Read More &raquo;</strong></a></p>
            </li>
            <!-- /case study panel -->
            <li> <a href="casestudies-single.html"><img src="images/mazet2010.jpg" alt="example" width="230" height="134" /></a>
              <p class="ge-summary-title">Insert title here</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu dui.</p>

              <p class="ge-readmore"><a href="casestudies-single.html"><strong>Read More &raquo;</strong></a></p>
            </li>
            <li> <a href="casestudies-single.html"><img src="images/ge-splash-placeholder3.jpg" alt="example" width="230" height="134" /></a>
              <p class="ge-summary-title">Insert title here</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu dui.</p>
              <p class="ge-readmore"><a href="casestudies-single.html"><strong>Read More &raquo;</strong></a></p>

            </li>
            <li> <a href="casestudies-single.html"><img src="images/ge-splash-placeholder4.jpg" alt="example" width="230" height="134" /></a>
              <p class="ge-summary-title">Insert title here</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu dui.</p>
              <p class="ge-readmore"><a href="casestudies-single.html"><strong>Read More &raquo;</strong></a></p>
            </li>
            <li> <a href="casestudies-single.html"><img src="images/julyos.jpg" alt="example" width="230" height="134" /></a>

              <p class="ge-summary-title">Insert title here</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu dui.</p>
              <p class="ge-readmore"><a href="casestudies-single.html"><strong>Read More &raquo;</strong></a></p>
            </li>
            <li> <a href="casestudies-single.html"><img src="images/mazet2010.jpg" alt="example" width="230" height="134" /></a>
              <p class="ge-summary-title">Insert title here</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu dui.</p>
              <p class="ge-readmore"><a href="casestudies-single.html"><strong>Read More &raquo;</strong></a></p>
            </li>
            <li> <a href="casestudies-single.html"><img src="images/mazet2010.jpg" alt="example" width="230" height="134" /></a>
              <p class="ge-summary-title">Insert title here</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu dui.</p>

              <p class="ge-readmore"><a href="casestudies-single.html"><strong>Read More &raquo;</strong></a></p>
            </li>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
      <!-- /case studies -->
    </div>

    <div class="clear"></div>
  </div>
</div>
<!-- /content frame -->
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<?php endwhile; ?><?php else : ?>
  	<h2>Oooopppsss...</h2>
		<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		<?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
	<?php endif; ?>

<div id="ge-footer-shadow-frame">
  <div class="ge-footer-shadow">
    <div class="ge-footer-shadow-color"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="ge-company-frame">

  <div class="ge-company">
  <!-- company info -->
    <div class="ge-company-content">
      <p>Nuestro filosophia estar siempre a la punta de las nuevas tecnologias de la informacion. Queremos siempre ofrecer el mejor a nuestros clientes. Exploramos el mundo buscando las novedades y tendiancias en la comunicacion. Pero la mejor de nosotros es la calidad de nuestro trabajo.</p>
    </div>
    <!-- /company info -->
    <div class="clear"></div>
  </div>

</div>
<div id="ge-footer-line-frame">
  <div class="ge-footer-line">
    <div class="ge-footer-line-color"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="ge-footer-frame">
  <div class="ge-footer">
    <div class="ge-footer-content">
      <ul>

        <li>
          <h4>Who we are</h4>
        </li>
        <li><a href="#">Our Work</a></li>
        <li><a href="#">Mission &amp; History</a></li>
        <li><a href="#">FAQs</a></li>

        <li><a href="#">Contactarnos</a></li>
        <li><a href="#">Our Work</a></li>
      </ul>
      <ul>
        <li>
          <h4>Who we are</h4>
        </li>

        <li><a href="#">Our Work</a></li>
        <li><a href="#">Mission &amp; History</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Contactarnos</a></li>
        <li><a href="#">Our Work</a></li>

      </ul>
      <ul>
        <li>
          <h4>Who we are</h4>
        </li>
        <li><a href="#">Our Work</a></li>
        <li><a href="#">Mission &amp; History</a></li>

        <li><a href="#">FAQs</a></li>
        <li><a href="#">Contactarnos</a></li>
        <li><a href="#">Our Work</a></li>

      </ul>
      <ul>
        <li>
          <h4>Who we are</h4>

        </li>
        <li><a href="#">Our Work</a></li>
        <li><a href="#">Mission &amp; History</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Contactarnos</a></li>
        <li><a href="#">Our Work</a></li>

      </ul>
      <!-- social media -->
      <ul class="ge-footer-social">
        <li>
          <h4>Networks</h4>
        </li>
        <li><a href="#"><img src="images/ge-footer-icon-twitter.png" alt="Twitter" width="16" height="16" />Twitter</a></li>
        <li><a href="#"><img src="images/ge-footer-icon-facebook.png" alt="Facebook" width="16" height="16" />Facebook</a></li>

        <li><a href="#"><img src="images/ge-footer-icon-flickr.png" alt="Flickr" width="16" height="16" />Flickr</a></li>
      </ul>
      <!-- /social media -->
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- copyright -->
<div id="ge-copyright-frame">
  <div class="ge-copyright">

    <div class="ge-copyright-content"> Copyright &copy; 2010 Nouveau Visage. All rights reserved. </div>
    <div class="clear"></div>
  </div>
</div>
<!-- /copyright -->
<script type="text/javascript"> Cufon.now(); </script>
<</body>

<!-- Mirrored from newchapter.vuu.com.au/preview/orange/page.php by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 06 Dec 2010 13:40:49 GMT -->
</html>