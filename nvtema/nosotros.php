<?php
/*
Template Name: NOUVEAU VISAGE
*/
?>

<?php get_header(); ?>
<!-- splash frame -->

<div id="sp-slideshow-frame">
  <div class="sp-slideshow">
    <div class="sp-slideshow-container">
      <div class="sp-slideshow-rotate"><img src="<?php bloginfo('template_url'); ?>/images/monde.jpg" alt="example" width="750" height="144" /></div>
    </div>
  </div>
</div>
<!-- /splash frame -->
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<!-- title frame -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div id="sp-title-frame">
  <div class="sp-title">
    <div class="sp-title-content">
      <!-- title -->
      <div class="sp-title-content-text">
        <h1>
          <?php the_title(); ?>
        </h1>
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
      
      
   
    <?php get_template_part( 'sidebarright', 'nosotros' ); ?>
    
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- /content frame -->
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<?php endwhile; ?>
<?php else : ?>
<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
<?php endif; ?>
<?php get_footer(); ?>
<?php get_template_part( 'sidebarleft', 'index' ); ?>
<script type="text/javascript"> Cufon.now(); </script>
</body></html>