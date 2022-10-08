<?php get_header(); ?>
  <div id="main">
    <div id="primary">
      <h1>Iglesia Pentecostal de Bolivia</h1>
       <?php  query_posts( array ( 'category_name' => 'Noticias', 'posts_per_page' => 3 ) ); ?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post();    
			$custom = get_post_custom($post->ID);
			$imagen_url = $custom["imagen_url"][0]; ?>
      <div class="post-item"> 
      <?php if ($imagen_url == "") {?>
                 <img src="<?php bloginfo('template_url'); ?>/timthumb.php?src=<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/logo.png&h=135&w=210&zc=1&cropfrom=topright" alt="thumb" > 
      
      <?php 
      }
      else{ ?>
           <img src="<?php bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $imagen_url;?>&h=135&w=210&zc=1&cropfrom=topright" alt="thumb" > 
      <?php 
      }?>


        <h2><?php the_title(); ?></h2>
        <div class="post-meta">
						<span class="comments">
<?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
                        </span> 
						<span class="categories"><?php the_category(', ') ?></span> 
					</div>

        <?php the_excerpt(); ?>
        <p class="permalink"> <a class="link-more" href="<?php the_permalink(); ?>" >Seguir leyendo <span class="meta-nav">--></span></a></p>
      </div>
      <!-- end post --> 

     <?php endwhile; ?>
   <?php endif; ?>
    </div>
    <!-- end primary -->
		<?php get_sidebar(); ?>
  </div>
  <!-- end main --> 
  <?php get_footer(); ?>