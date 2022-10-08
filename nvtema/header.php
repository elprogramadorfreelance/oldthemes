<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php bloginfo('name') ?>
<?php if ( is_404() ) : ?>
&raquo;
<?php _e('Not Found') ?>
<?php elseif ( is_home() ) : ?>
&raquo;
<?php bloginfo('description') ?>
<?php else : ?>
<?php wp_title() ?>
<?php endif ?>
</title>
<link rel="shortcut icon" href="favicon.ico"/>
<meta name="description" content="" />
<meta name="keywords" content="" />
<!--
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js'></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/queryLoader.css" type="text/css" />
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/lib/queryLoader.js'></script>
-->

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout.css"/>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie6.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie7.css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie8.css" />
<![endif]-->
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/jquery-core.js"></script>


<!--[if IE 6]>
<script type="text/javascript" src="lib/jquery-pngfix.js"></script>
<script type="text/javascript" src="lib/jquery-config-ie6.js"></script>
<![endif]-->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/cufon.js"></script>
<script src="http://cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/droid-sans.cufonfontsbold.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/droid-sans.cufonfonts.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/jquery-hover.js"></script>


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/jquery-superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/jquery-cycle.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/jquery-config.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/jquery-jcarousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/jquery-form.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#ge-mailinglist-form').ajaxForm(function(data) {
		if (data==3){alert('Veuillez entrer une adresse email valide.')}
		else if (data==2){alert('Votre inscription a bien été enregistrée.'); $('#ge-mailinglist-form').resetForm();}
	});
});	
</script>

</head>
<body>
<!-- header -->
<div id="ge-header-frame">
  <div class="ge-header">
    <div class="ge-navigation">
      <div class="ge-navigation-item">
        <?php wp_nav_menu( array('container' => null, 'menu_class' => 'sf-menu'   ) ); ?>
      </div>
      <!-- Idioma -->
      <div class="banderas"> <a href="http://es.nouveauvisage.fr"><img src="<?php bloginfo('template_url'); ?>/images/bandesp.gif" alt="Español" width="15" height="10" /></a> | <a href="http://nouveauvisage.fr"><img src="<?php bloginfo('template_url'); ?>/images/bandfr.gif" alt="Français" width="15" height="10" /></a> </div>
      <!-- /idioma -->
      <!-- phone -->
      <div class="ge-phone">
        <h2><?php echo get_option('telefono'); ?></h2>
      </div>
      <!-- /phone -->
    </div>
    <!-- sidebar -->
    <div id="ge-sidebar">
      <div class="ge-logo"><a href="index.php"><img src="<?php bloginfo('template_url'); ?>/images/ge-logo.png" alt="Nouveau Visage" width="120" height="110" /></a></div>
      <div class="ge-sidebar-text">
        <p><?php echo get_option('mensaje_logo'); ?></p>
      </div>
      <div class="ge-search">
        <form action="<?php bloginfo('home'); ?>/" method="get" id="ge-search-form">
          <fieldset>
            <label for="search" class="none">Search</label>
            <!-- <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />-->
            <input type="text" name="s" id="s"  value="<?php the_search_query(); ?>" onfocus="if (value =='Search') value=''" onblur="if (value=='') value='Search'"/>
            <button type="submit"><span>Search</span></button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- /sidebar -->
  </div>
</div>
<!-- /header -->
