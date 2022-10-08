<?php
/*
Template Name: Blog Nouveau Visage
*/
?>
    
<?php get_template_part( 'headerblog', 'index' ); ?>
 
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
      <div class="sp-title-content-text">

        <h1>Blog</h1>
      </div>
      <div class="sp-title-content-breadcrumbs">
      	<a href="http://nouveauvisage.fr">Home</a> &nbsp; > &nbsp; Blog
      </div>
    </div>
  </div>

  <div class="clear"></div>
</div>
<!-- /title frame -->
<!-- content frame -->
<div id="ge-content-frame">
  <div class="ge-content">
    <div class="in-main-content">
      <div class="sp-content-fullwidth">
      
 <?php   query_posts('category');     ?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>      
      
      <!-- news panel -->
        <div class="sp-bl-list">
          <h2><?php the_title(); ?></h2>

          <!-- post image -->
          <div class="sp-bl-image">
          	<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail()) the_post_thumbnail('lista-blog-thumb'); ?></a>
          </div>
          <!-- /post image -->
          <div class="sp-bl-text">
          <!-- post excerpt -->
            <p><?php the_excerpt(); ?></p>

            <!-- /post excerpt -->
            <p class="ge-readmore"><a href="<?php the_permalink(); ?>"><strong>En savoir plus</strong></a></p>
          </div>
          <!-- post details -->
          <div class="sp-bl-details">
            <ul>
              <li><img src="<?php bloginfo('template_url'); ?>/images/sp-bl-icon-comments.gif" alt="Comments" width="16" height="16" /><a href="#"><?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?></a></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/sp-bl-icon-category.gif" alt="Categories" width="16" height="16" /><a href="#"><?php the_category(', '); ?></a></li>

              <li><img src="<?php bloginfo('template_url'); ?>/images/sp-bl-icon-date.gif" alt="Date" width="16" height="16" /><a href="#"><?php the_date('Y.m.d'); ?></a></li>
              <li class="end-detail"><img src="<?php bloginfo('template_url'); ?>/images/sp-bl-icon-author.gif" alt="Author" width="16" height="16" /><a href="#">Publié par <?php the_author() ?></a></li>
            </ul>
          </div>
          <!-- /post details -->
        </div>
        <!-- /news panel -->
<?php endwhile; ?>
<?php else : ?>
<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
<?php endif; ?>        
</div></div>
    <div class="clear"></div>
  </div>
</div>
<!-- /content frame -->
<?php get_footer(); ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>