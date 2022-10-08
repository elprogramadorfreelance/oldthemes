<?php
if ( function_exists('register_sidebar') )
register_sidebar();
function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}

add_action('admin_menu', 'nvipentecostal_menu');
add_option('telefono', '');
add_option('mensaje_logo', '');
add_option('titulo', '');
add_option('mensaje', '');
add_option('titulomail', '');
add_option('mensajemail', '');
add_option('mensaje_delpie', '');


function nvipentecostal_menu() {
	add_theme_page('Options', 'Options', 8, 'nvipentecostal', 'nvipentecostal_page');
}

function nvipentecostal_page() {
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
