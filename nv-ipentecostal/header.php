<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
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
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

	<!-- codigo destinado al funcionamiento del slider -->
	<link type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/nv-ipentecostal/css/css3.css" rel="stylesheet" />
	<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/nv-ipentecostal/js/jquery.pikachoose.js"></script>
	<!-- Fin codigo destinado al funcionamiento del slider -->

	<!-- codigo destinado al funcionamiento del Acordeon -->
    
    <link type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/nv-ipentecostal/css/demos.css" rel="stylesheet" />
    <link type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/nv-ipentecostal/themes/base/ui.theme.css" rel="stylesheet" />
    <link type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/nv-ipentecostal/themes/base/ui.accordion.css" rel="stylesheet" />
    <link type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/nv-ipentecostal/themes/base/ui.core.css" rel="stylesheet" />
	<link type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/nv-ipentecostal/css/ui.all.css" rel="stylesheet" />
	
    
	<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/nv-ipentecostal/js/ui.core.js"></script>
	<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/nv-ipentecostal/js/ui.accordion.js"></script>
	
    
	<!-- Fin codigo destinado al funcionamiento del Acordeon -->

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
	<script language="javascript">
			$(document).ready(
				function (){
					$("#pikame").PikaChoose();
				});
		</script>
	<script type="text/javascript">
	$(function() {
		$("#accordion").accordion({
			collapsible: true
		});
	});
	</script>
	</head>

	<body>
<div id="line-top"></div>
<div id="wrap">
	<div id="header"><h1><a href="#">IP</a></h1>
        <ul>
          <li id="facebook"><a href="#"></a></li>
          <li id="feed"><a href="#"></a></li>
          <li id="contacto"><a href="#"></a></li>
          <li id="youtube"><a href="#"></a></li>
        </ul>
  	</div>
      <!-- end header -->
	<div id="menu">
    	<div id="menu-right">
          	<div id="menu-content">
        		<?php wp_nav_menu( array('container' => 'false', 'menu_class'      => 'nav sf-js-enabled' )); ?>
      		</div>
          <!-- end #menu-content --> 
        </div>
    <!-- end #menu-right --> 
  	</div>
    <?php get_template_part('slider','index'); ?>
<!-- Fin del slider --> 