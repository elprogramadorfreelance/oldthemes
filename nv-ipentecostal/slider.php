
<div id="slider"> 
  <div class="pikachoose">
    <ul id="pikame" >
      <?php  query_posts( array ( 'category_name' => 'Slider', 'posts_per_page' => 4 ) ); ?>
      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <?php	
			$custom = get_post_custom($post->ID);
			$imagen_url = $custom["imagen_url"][0];
		?>
      <li> <a href="<?php the_permalink(); ?>"> <img src="<?php bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $imagen_url;?>&h=250&w=980&zc=1&cropfrom=topright" alt="thumb" > </a> <span>
        <?php the_excerpt(); ?>
        </span> </li>
      <?php endwhile; ?>
      <?php else : ?>
      <p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
      <?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
      <?php endif; ?>
    </ul>
  </div>
</div>
<!--Fin por el  Aporte realizado para el Sider -->