
    <?php get_header(); ?>
    <?php 
wp_head();
?>
    
  </div>
</div>
<!-- /header -->
<!-- title frame -->
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div id="sp-title-frame-alt">
  <div class="sp-title">
    <div class="sp-title-content-alt">

    <!-- title -->
      <div class="sp-title-content-text">
        <h1><?php the_title();?></h1>
      </div>
	        <!-- breadcrumb -->
      <div class="sp-title-content-breadcrumbs">
      	<a href="index.php">Home</a> &nbsp; > &nbsp; <a href="?page_id=447">Portafolio</a> &nbsp; > &nbsp; <?php the_title(); ?>
		
		
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
    <div class="in-main-content-black">
      <div class="sp-content-fullwidth-black">

        <strong><?php the_title(); ?></strong>
        
				<?php the_content(); ?>
      
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- /content frame -->
  <?php endwhile; ?>
<?php else : ?>
		<p>Désolé, aucun article ne correspond à vos critères.</p>
<?php endif; ?>
<?php get_footer(); ?>
</html>