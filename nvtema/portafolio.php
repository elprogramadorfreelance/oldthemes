<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="http://s313814148.onlinehome.us/nouveauvisage/sitio/wp-content/themes/nvtema/styles/main.css" />
<script src="http://s313814148.onlinehome.us/nouveauvisage/sitio/wp-content/themes/nvtema/scripts/assets/jquery-1.4.1-and-plugins.min.js" type="text/javascript"></script>
<script src="http://s313814148.onlinehome.us/nouveauvisage/sitio/wp-content/themes/nvtema/scripts/main.js" type="text/javascript"></script>
<!-- esto fue un cambio de NV -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/jquery-easing.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/jquery-quicksand.js"></script>
<!-- title frame -->
<div id="sp-title-frame-alt">
  <div class="sp-title">
    <div class="sp-title-content-alt">
      <!-- title -->
      <div class="sp-title-content-text">
        <h1>Portafolio</h1>
      </div>
      <!-- /title -->
      <!-- breadcrumb -->   
      <div class="sp-title-content-breadcrumbs">
      	<a href="index.php">Home</a> &nbsp; > &nbsp; Portafolio
      </div>
      <!-- /breadcrumb -->
    </div>
  </div>
  <div class="clear"></div>
</div>

<!-- /title frame -->
<!-- content frame -->
<div id="ge-content-frame-black">
  <div class="ge-content">
    <div class="sp-sh-main-content">
      <div class="sp-sh-content-fullwidth">
        <?php $tipo_portafolio = ""; ?>
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post();
      $tipo_portafolio = get_post_meta($post->ID, 'categoria', true);
      endwhile; ?>
        <?php else : ?>
        <ul>
          <li>Désolé, aucun article ne correspond à vos critères.</li>
        </ul>
        <?php endif; ?>
        <!-- this isn't part of the plugin, just a control for demo -->
        <ul class="splitter">
          <li>
            <ul>
              <!--<li class="segment-1">
                	<a href="#" data-value="all">Tous les projets</a></li> -->
              <?php
switch ($tipo_portafolio) {
	    case "all":
	   	   echo "         <li class=\"segment-0 selected-1\"> ";
           echo "         <a href=\"#\" data-value=\"all\">Tous les projets</a></li> ";
	       echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"edicion\">Edition</a></li> ";
           echo "     	  <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"web\">Web</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"senalizacion\">Signalétique</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"multimedia\">Multimedia</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"arquitectura\">Design</a></li> ";
         break;
    case "edicion":
	   	   echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"all\">Tous les projets</a></li> ";
	       echo "         <li class=\"segment-0 selected-1\"> ";
           echo "         <a href=\"#\" data-value=\"edicion\">Edition</a></li> ";
           echo "     	  <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"web\">Web</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"senalizacion\">Signalétique</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"multimedia\">Multimedia</a></li> ";
           echo "        <li class=\"segment-0\"> ";
           echo "        <a href=\"#\" data-value=\"arquitectura\">Design</a></li> ";
         break;
    case "web":
	   	   echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"all\">Tous les projets</a></li> ";
	       echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"edicion\">Edition</a></li> ";
           echo "     	  <li class=\"segment-0 selected-1\"> ";
           echo "         <a href=\"#\" data-value=\"web\">Web</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"senalizacion\">Signalétique</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"multimedia\">Multimedia</a></li> ";
           echo "        <li class=\"segment-0\"> ";
           echo "        <a href=\"#\" data-value=\"arquitectura\">Design</a></li> ";
        break;
    case "senalizacion":
	   	   echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"all\">Tous les projets</a></li> ";
	       echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"edicion\">Edition</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"web\">Web</a></li> ";
           echo "         <li class=\"segment-0\ selected-1\"> ";
           echo "         <a href=\"#\" data-value=\"senalizacion\">Signalétique</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"multimedia\">Multimedia</a></li> ";
           echo "        <li class=\"segment-0\"> ";
           echo "        <a href=\"#\" data-value=\"arquitectura\">Design</a></li> ";
        break;
    case "multimedia":
	   	   echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"all\">Tous les projets</a></li> ";
	       echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"edicion\">Edition</a></li> ";
           echo "     	  <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"web\">Web</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"senalizacion\">Signalétique</a></li> ";
           echo "         <li class=\"segment-0\ selected-1\"> ";
           echo "         <a href=\"#\" data-value=\"multimedia\">Multimedia</a></li> ";
           echo "        <li class=\"segment-0\"> ";
           echo "        <a href=\"#\" data-value=\"arquitectura\">Design</a></li> ";
        break;
    case "Design":
	   	   echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"all\">Tous les projets</a></li> ";
	       echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"edicion\">Edition</a></li> ";
           echo "     	  <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"web\">Web</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"senalizacion\">Signalétique</a></li> ";
           echo "         <li class=\"segment-0\"> ";
           echo "         <a href=\"#\" data-value=\"multimedia\">Multimedia</a></li> ";
           echo "        <li class=\"segment-0\ selected-1\"> ";
           echo "        <a href=\"#\" data-value=\"arquitectura\">Design</a></li> ";
        break;
}
?>
            </ul>
          </li>
        </ul>
        <?php 
			$loop = new WP_Query(array('post_type' => 'portfolio')); 
		?>
        <div class="sp-sh-filter">
          <ul id="list" class="image-grid">
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php	
			$custom = get_post_custom($post->ID);
			$screenshot_url = $custom["screenshot_url"][0];
			$website_url = $custom["website_url"][0];
		
		?>
            <li data-id="id-<?php echo $post->ID; ?>" class="<?php echo $website_url; ?>"> 
              
               <a href="<?php the_permalink() ?>">
              <?php the_post_thumbnail('portafolio-thumb'); ?></a>
              <p><a href="<?php the_permalink() ?>"><strong><?php the_title(); ?></strong></a></p>
              
              <!--<a href="<?php the_permalink() ?>">Leer más</a>-->
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
        <!-- /portafolio items -->
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- /content frame -->
<?php get_footer(); ?>
<!-- /copyright -->
<script type="text/javascript"> Cufon.now(); </script>
</body></html>