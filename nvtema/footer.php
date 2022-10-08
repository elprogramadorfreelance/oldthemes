<div id="ge-footer-shadow-frame">
  <div class="ge-footer-shadow">
    <div class="ge-footer-shadow-color"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="ge-company-frame">
  <div class="ge-company">
  <!-- company info -->
    <div class="ge-company-content">
      <p><?php echo get_option('mensaje_delpie'); ?></p>
    </div>
    <!-- /company info -->
    <div class="clear"></div>
  </div>
</div>
<div id="ge-footer-line-frame">
  <div class="ge-footer-line">
    <div class="ge-footer-line-color"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="ge-footer-frame">
  <div class="ge-footer">
    <div class="ge-footer-content">
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
        <?php endif; ?>
		
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
        <?php endif; ?>
      
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?>
        <?php endif; ?>
      
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(5) ) : else : ?>
        <?php endif; ?>
      
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(6) ) : else : ?>
        <?php endif; ?>       
      
    </div>
   </div>
  </div>
</div>
<!-- copyright -->
<div id="ge-copyright-frame">
  <div class="ge-copyright">
    <div class="ge-copyright-content"> Copyright &copy; 2010 Nouveau Visage. All rights reserved. </div>
    <div class="clear"></div>
  </div>
</div>
<script type='text/javascript'>
	QueryLoader.init();
</script>



<!-- /copyright -->