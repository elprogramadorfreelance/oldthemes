      <!-- mailing list -->
      <div class="ge-mailinglist">
        <div class="ge-mailinglist-text">
          <img src="<?php bloginfo('template_url'); ?>/images/ge-mailinglist-icon.gif" alt="Mailing List" width="40" height="24" />
          <!-- mailing list text -->
          <h3><?php echo get_option('titulomail'); ?></h3>
          <p><?php echo get_option('mensajemail'); ?></p>
          <!-- /mailing list text -->
        </div>
        <div class="ge-mailinglist-form-container">
        <!-- mailing list form -->
        
   <!--     <form method="post" action="">
<p>Your email:<br />
        <input type="text" name="email" value="Enter email address..." size="20" onfocus="if (this.value == 'Enter email address...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter email address...';}" /></p><p>
        <input type="submit" name="unsubscribe" value="Unsubscribe" /></p></form>-->


          <form method="post" action="" id="ge-mailinglist-form">
            <fieldset>
              <label for="emailaddress" class="none">Email Address</label>
                      <input type="hidden" name="ip" value="190.181.36.78" />
              <input name="email" id="emailaddress" type="text" value="Email Address" onfocus="if (value =='Email Address') value=''" onblur="if (value=='') value='Email Address'" />
              <button type="submit"><span>Signup</span></button>
            </fieldset>
          </form>
          <!-- /mailing list form -->
        </div>
      </div>
      <!-- /mailing list -->