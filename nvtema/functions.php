<?php
add_action('init', 'create_portfolio');
function create_portfolio() {
   	$portfolio_args = array(
      	'label' => __('Portfolio'),
       	'singular_label' => __('Portfolio'),
       	'public' => true,
       	'show_ui' => true,
       	'capability_type' => 'post',
       	'hierarchical' => true,
       	'rewrite' => true,
       	'supports' => array('title', 'editor', 'thumbnail','page-attributes')
     );
    	register_post_type('portfolio',$portfolio_args);
	}
	add_action("admin_init", "add_portfolio");
	add_action('save_post', 'update_website_url');
	
register_taxonomy( 'type', 'portfolio', array( 'hierarchical' => true, 'label' => 'Categorias', 'query_var' => true, 'rewrite' => true ) );  
register_taxonomy( 'couleur', 'portfolio', array( 'hierarchical' => false, 'label' => 'Couleur', 'query_var' => true, 'rewrite' => true ) ); 




/* sidebars*/
if ( function_exists('register_sidebar') )
   register_sidebar(array(
   'name' => 'sidebarleft',
   'before_widget' => '<div class="sp-bl-navigation">',
   'after_widget' => '</div>',
   'before_title' => '<h3>',
   'after_title' => '</h3>',
   ));
   
   register_sidebar(array(
   'name' => 'sidebar footer1',
   'before_widget' => '<div class="sidebarfooter">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
   ));
   
   register_sidebar(array(
   'name' => 'sidebar footer2',
   'before_widget' => '<div class="sidebarfooter">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
   ));
      
   register_sidebar(array(
   'name' => 'sidebar footer3',
   'before_widget' => '<div class="sidebarfooter">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
   ));
      
   register_sidebar(array(
   'name' => 'sidebar footer4',
   'before_widget' => '<div class="sidebarfooter">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
   ));
      
      
   register_sidebar(array(
   'name' => 'sidebar footer5',
   'before_widget' => '<div class="sidebarfooter">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
   ));
      
      
   register_sidebar(array(
   'name' => 'sidebarright',
   'before_widget' => '<div class="sp-side-item">',
   'after_widget' => '</div>',
   'before_title' => '<li class="title">',
   'after_title' => '</li>',
   ));
      
   register_sidebar(array(
   'name' => 'sidebarrightservicio',
   'before_widget' => '<div class="sp-side-item">',
   'after_widget' => '</div>',
   'before_title' => '<li class="title">',
   'after_title' => '</li>',
   ));
         
      
   register_sidebar(array(
   'name' => 'sidebarblog',
   'before_widget' => '<li class="sp-bl-navigation">',
   'after_widget' => '</li>',
   'before_title' => '<h3>',
   'after_title' => '</h3>',
   ));
            
      
   register_sidebar(array(
   'name' => 'sidebarcontact',
   'before_widget' => '<div class="sp-side-item">',
   'after_widget' => '</div>',
   'before_title' => '<li class="title">',
   'after_title' => '</li>',
   ));
   
/* fin de sidebars*/



	function add_portfolio(){
		add_meta_box("portfolio_details", "Portfolio Options", "portfolio_options", "portfolio", "normal", "low");
	}
	function portfolio_options(){
		global $post;
		$custom = get_post_custom($post->ID);
		$website_url = $custom["website_url"][0];
?>
<div id="portfolio-options">
		<label>Clase: </label><input name="website_url" value="<?php echo $website_url; ?>" />		
	</div>end portfolio-options  
	  
<?php
	}
	function update_website_url(){
		global $post;
		update_post_meta($post->ID, "website_url", $_POST["website_url"]);
	}
add_filter("manage_edit-portfolio_columns", "portfolio_edit_columns");
add_action("manage_posts_custom_column",  "portfolio_columns_display");
 
function portfolio_edit_columns($portfolio_columns){
	$portfolio_columns = array(
		"cb" => "<input type=\"checkbox\" />",
		"title" => "Project Title",
		"description" => "Description",
		"categorie" => "categorie",
        "author" => __('Author'),
        "comments" => __('Comments'),
        "date" => __('Date'),
	);
	return $portfolio_columns;
}
 
function portfolio_columns_display($portfolio_columns){
	switch ($portfolio_columns)
	{
		case "description":
			the_excerpt();
			break;				
	}
}



function new_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');
/* if ( function_exists('register_sidebar') )
register_sidebar();*/
if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'cat-thumb', 200, 200 );
	add_image_size( 'blog-thumb', 390, 200, true ); /* SON LAS DIMENSIONES PARA EL BLOG */
	add_image_size( 'lista-blog-thumb',268, 138, true );
	add_image_size( 'servicio-thumb', 230, 134 );
	add_image_size( 'ut-thumb', 230, 134, true );
	add_image_size( 'clientes-thumb', 230, 134,true );
	add_image_size( 'portafolio-thumb', 158, 125, true ); /*portafolio*/
	add_image_size( 'search-thumb', 220, 180, true );
	
	
}


		
/* ruta 
function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> >> ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " >> ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}
fin de ruta */

add_action('admin_menu', 'newchapter_menu');
add_option('telefono', '');
add_option('mensaje_logo', '');
add_option('titulo', '');
add_option('mensaje', '');
add_option('titulomail', '');
add_option('mensajemail', '');
add_option('mensaje_delpie', '');


function newchapter_menu() {
	add_theme_page('Options', 'Options', 8, 'newchapter', 'newchapter_page');
}

function newchapter_page() {
?>

<div class="wrap">
	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		
		<h2>Options</h2>
		
		<p><b>téléphone</b></p>
		<p><input type="text" name="telefono" id="telefono" size="20" value="<?php echo get_option('telefono'); ?>" /></p>
		
		<p><b>Texte sous le logo</b></p>
		<p><textarea name="mensaje_logo" cols="50" rows="1"><?php echo get_option('mensaje_logo'); ?></textarea></p>
		
		<p><b>Titre du message principal</b></p>
		<p><textarea name="titulo" cols="70" rows="1"><?php echo get_option('titulo'); ?></textarea></p>
		
		<p><b>Message principal</b></p>
		<p><textarea name="mensaje" cols="70" rows="7"><?php echo get_option('mensaje'); ?></textarea></p>
        
        <p><b>Titre du Mailing</b></p>
		<p><textarea name="titulomail" cols="70" rows="1"><?php echo get_option('titulomail'); ?></textarea></p>
		
		<p><b>Message du Mailing</b></p>
		<p><textarea name="mensajemail" cols="70" rows="7"><?php echo get_option('mensajemail'); ?></textarea></p>
        
        <p><b>Message du bas de page</b></p>
		<p><textarea name="mensaje_delpie" cols="70" rows="7"><?php echo get_option('mensaje_delpie'); ?></textarea></p>
		
		<br />
		<p><input type="submit" name="Submit" value="<?php _e('REGISTRAR') ?>" class="button" /></p>
		
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="telefono,mensaje_logo,titulo,titulomail,mensajemail,mensaje_delpie,mensaje" />
	</form>
</div>

<?php } ?>
<?php
function my_ticklist($atts, $content = null) {
	    return '<div class="ticklist">'.$content.'</div>';
	}
	add_shortcode('ticklist', 'my_ticklist');
	 
function my_crosslist($atts, $content = null) {
 return '<div class="crosslist">'.$content.'</div>';
}
add_shortcode('crosslist', 'my_crosslist');
?>