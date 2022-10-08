<?php get_header(); ?>
<!-- splash frame -->
<div id="sp-slideshow-frame">
  <div class="sp-slideshow">
    <div class="sp-slideshow-container">
      <div class="sp-slideshow-rotate"> <img src="images/sp-splash-placeholder.jpg" alt="example" width="750" height="144" /> </div>
    </div>
  </div>
</div>
<!-- /splash frame -->
<!-- title frame -->
<div id="sp-title-frame">
  <div class="sp-title">
    <div class="sp-title-content">
    <!-- title --><div class="sp-title-content-text"><h1>Search Results for &quot;Lorem&quot; - 52 Articles</h1></div><!-- /title -->
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
      <div class="sp-content-fullwidth">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>      
      	<!-- search panel -->
        <div class="sp-se-list">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_excerpt(); ?></p>
          <p class="ge-readmore"><a href="#"><strong>Read More &raquo;</strong></a></p>
        </div>
        <!-- /search panel -->
<?php endwhile; ?>
<?php else : ?>
		<h2 class="center">Aucun article trouvé. Essayer une autre recherche ?</h2>		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>
        <span class='sp-paginate-no-link'>Page 3 of 9</span> 
        <a href="#" class="sp-paginate-no">&laquo;</a> <a href='#' class='sp-paginate-no'>1</a> 
        <a href='#' class='sp-paginate-no'>2</a> <span class='sp-paginate-no-current'>3</span> <a href='#' class='sp-paginate-no'>4</a> 
        <a href='#' class='sp-paginate-no'>5</a> <a href="#" class="sp-paginate-no">&raquo;</a> <span class='sp-paginate-no-link'>...</span> 
        <a href='#' class='sp-paginate-no'>Last &raquo;</a> </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- /content frame -->
<?php get_footer(); ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>