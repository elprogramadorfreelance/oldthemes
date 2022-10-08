 <?php query_posts('category_name=blog'); ?>
 <?php if(have_posts()) : ?>
 <!-- case studies -->
      <div class="ge-summary-case">
        <div class="module-header">
          <h2>Blog</h2>
          <div class="module-arrows"></div>
          <div class="clear"></div>
        </div>
        <div class="module-casestudies">
          <ul id="jcarousel-content-1" class="jcarousel-skin-1">
            <!-- -->
            <?php while (have_posts()) : the_post(); ?>
            <li>
              <div class="module-casestudies-image">
              	<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail()) the_post_thumbnail('blog-thumb'); ?>
                <!-- <img src="<?php bloginfo('template_url'); ?>/images/ge-splash-casestudies-placeholder.jpg" alt="example" width="390" height="200" /> --> </a>
              </div>
              <div class="module-casestudies-text">
                <p class="ge-summary-title"><?php the_title(); ?></p>
                <p class="ge-specs"><?php the_time('j F Y') ?></p>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>"><strong>En savoir plus</strong></a></p>
              </div>
            </li>
            <?php endwhile; ?>
            <!-- -->            
          </ul>
        </div>
      </div>
      <!-- /case studies -->
	<?php else : ?><h2>Oooopppsss...</h2><p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
<?php endif; ?>      