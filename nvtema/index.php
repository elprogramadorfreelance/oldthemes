<?php get_header(); ?>
<?php get_template_part( 'splashframe', 'index' ); ?>
<!-- introduction frame -->
<?php get_template_part( 'introductionframe', 'index' ); ?>
<!-- /introduction frame -->
<!-- content frame -->
<div id="ge-content-frame">
  <div class="ge-content">
    <div class="in-main-content">
      <!-- services -->
      <?php get_template_part( 'ultimos-trabajos', 'index' ); ?>
      <!-- clients -->
      <?php get_template_part( 'clients', 'index' ); ?>
      <!-- case studies -->
      <?php get_template_part( 'casestudies', 'index' ); ?>
      <!-- mailing list -->
      <?php get_template_part( 'ge-mailinglist', 'index' ); ?>
      
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- /content frame -->

<?php get_footer(); ?>
<script type="text/javascript"> Cufon.now(); </script>
</body></html>