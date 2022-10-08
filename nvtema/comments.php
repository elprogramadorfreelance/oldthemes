<?php // Ne pas supprimer ces lignes
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Ne pas t&eacute;l&eacute;charger cette page directement, merci !');
if (!empty($post->post_password)) { // s'il y a un mot de passe
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // et ça ne fonctionne pas avec le cookie
?>

<h2><?php _e('Prot&eacute;g&eacute; par mot de passe'); ?></h2>
<p><?php _e('Entrer le mot de passe pour voir les commentaires'); ?></p>

<?php return;
	}
}

	/* Cette variable est là comme alternative au fond d'écran des commentaires */

$oddcomment = 'alt';

?> 
<?php if ($comments) : ?>
 <!-- comments frame -->
	<div class="sp-bl-comments">
        <h2><?php comments_number('Pas de commentaire', 'Un commentaire', '% commentaires' );?></h2>
        <!-- comment panel -->
        <?php foreach ($comments as $comment) : ?>
        <div class="sp-bl-comments-panel">
        	<div class="sp-bl-comments-detail"> <strong><a href="#"><?php comment_author_link() ?></a></strong><br /><span><?php comment_date('j F, Y') ?></span> </div>
          <div class="sp-bl-comments-text">
            <p><?php comment_text() ?></p>
          </div>
          <div class="clear"></div>
        </div>
        <?php /* Change tous les autres commentaires à une classe différente */
			if ('alt' == $oddcomment) $oddcomment = '';
			else $oddcomment = 'alt';
		?>
		<?php endforeach; /* fin de chaque commentaire */ ?>
        <!-- /comment panel -->
      </div>      
<!-- /comments frame -->
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
      <div class="sp-bl-addcomment">
        <h2>Ajouter un commentaire</h2>
        <div class="sp-bl-addcomment-panel">
        <!-- comment form -->
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="sp-bl-form">
            <fieldset>
              <div class="sp-bl-form-one">
                <label for="name">Nom <span>*</span></label>
                <input name="author" id="author"  id="name" type="text" value="<?php echo $comment_author; ?>"/>
              </div>
              <div class="sp-bl-form-two">
                <label for="email">Email <span>*</span></label>
                <input name="email" id="email" type="text" value="<?php echo $comment_author_email; ?>" />
              </div>
              <div class="sp-bl-form-three">
                <label for="website">Site internet</label>
                <input name="url" id="website" type="text" value="<?php echo $comment_author_url; ?>"/>
              </div>
              <label for="comment" class="clear">Commentaire <span>*</span></label>
              <textarea name="comment"  id="comment" cols="3" rows="9"></textarea>
              <p class="left">Les champs marqués <span>*</span> sont obligatoires</p>
              <button type="submit" value="Envoyer" ><span>Envoyer</span></button> 
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		</p>
		<?php do_action('comment_form', $post->ID); ?>
            </fieldset>
          </form>
          <!-- /comment form -->
        </div>
      </div>
<?php endif; // Si vous supprimez cete ligne, le ciel vous tombera sur la tête ?>