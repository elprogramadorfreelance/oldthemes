<?php
$post = $wp_query->post;
// Teste si catégorie de l'article a l'identifiant '9' pour choisir l'affichage
if ( (in_category(array(3)))) {
	include(TEMPLATEPATH . '/single-blog.php');
} 
else {

		include(TEMPLATEPATH . '/single-portafolio.php');	
	}
?>