<?php query_posts( array('posts_per_page' => 6, 'post_type' => array('portfolio') ) ); ?>

<?php if(have_posts()) : ?>

<div class="ge-summary">
  <div class="module-header">
    <h2>Derniers projets</h2>
    <div class="module-arrows"></div>
    <div class="clear"></div>
  </div>
  <div class="module-services">
    <ul id="jcarousel-content-3" class="jcarousel-skin-3">
      <?php while (have_posts()) : the_post(); ?>
      <li>
        <a href="?page_id=447">
        <?php if ( has_post_thumbnail()) the_post_thumbnail('ut-thumb'); ?>
        </a>
        <p class="ge-summary-title">
          <?php the_title(); ?>
        </p>
        <?php the_excerpt(''); ?>
        </p>
        <p class="ge-readmore"><a href="http://s313814148.onlinehome.us/nouveauvisage/sitio/portafolio/"><strong>En savoir plus</strong></a></p>
      </li>
      <?php endwhile; ?>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<?php else : ?>
<?php endif; ?>
