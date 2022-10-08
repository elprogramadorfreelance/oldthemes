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
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<!-- title frame -->
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
      	<a href="index.php">Home</a> &nbsp; > &nbsp; <a href="?page_id=207">Blog</a> &nbsp; > &nbsp; <?php the_title(); ?>
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
      <div class="sp-bl-content-fullwidth">
		<?php the_content(); ?>
        <!-- author -->
        <div class="sp-bl-author">
        <!-- author image -->
          <div class="sp-bl-author-avatar">
          	<img src="<?php bloginfo('template_url'); ?>/images/sp-bl-default-avatar.jpg" alt="example" width="68" height="68" />

          </div>
          <!-- /author image -->
          <!-- author description -->
          <div class="sp-bl-author-desc">
          <a href="#"><strong><?php the_author() ?></strong></a><br />
            <?php the_author_meta('description'); ?>
          </div>
          <!-- /author description -->
        </div>
        <!-- author -->
        <div class="clear"></div>
      </div>
      <!-- post details -->

      <div class="sp-bl-details">
        <ul>
          <li><img src="<?php bloginfo('template_url'); ?>/images/sp-bl-icon-comments.gif" alt="Comments" width="16" height="16" /><a href="#"><?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?></a></li>
          <li><img src="<?php bloginfo('template_url'); ?>/images/sp-bl-icon-category.gif" alt="Categories" width="16" height="16" /><a href="#"><?php the_category(', '); ?></a></li>
          <li><img src="<?php bloginfo('template_url'); ?>/images/sp-bl-icon-date.gif" alt="Date" width="16" height="16" /><a href="#"><?php the_date('d.m.Y'); ?></a></li>
          <li class="end-detail"><img src="<?php bloginfo('template_url'); ?>/images/sp-bl-icon-author.gif" alt="Author" width="16" height="16" /><a href="#">Posted by <?php the_author() ?></a></li>
        </ul>

      </div>
      <!-- /post details -->
      <div class="clear"></div>
<?php comments_template(); ?>
    </div>
	
<?php endwhile; ?>
<?php else : ?>
		<p>D�sol�, aucun article ne correspond � vos crit�res.</p>
<?php endif; ?>
    <div class="clear"></div>
  </div>
</div>
<!-- /content frame -->
<?php get_footer(); ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>