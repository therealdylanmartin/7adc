<?php
/**
 * Footer template partial
 *
 * @package 7ADC_Theme
 *
 */
?>
  <footer class="footer">

    <section class="footer__email-capture" id="email-sign-up">
      <h2 class="heading-primary email-capture--h2">Sign up now for updates and special offers.</h2>
      <h3 class="subheading-primary email-capture--h3">Sign up for Seven Acre email updates for your chance to win a one-night stay and dinner for two!</h3>
      <div class="email-capture--form-container">
        <!-- Begin Mailchimp Signup Form -->
        <form action="https://sevenacredairyco.us14.list-manage.com/subscribe/post?u=4107b8ea5c4588a0f823e7aa2&amp;id=3620838258" method="post" class="email-capture--form" target="_blank" novalidate>
  
          <div class="email-capture--input-group">
            <div class="field-group-primary">
              <input type="text" name="FNAME" class="field-group-primary__input" placeholder="First Name" id="mce-FNAME">
              <label class="field-group-primary__input-label" for="mce-FNAME">First Name</label>
            </div>
            <div class="field-group-primary">
              <input type="tel" name="PHONE" class="field-group-primary__input phone-input" placeholder="Phone (optional)" maxlength="14" id="mce-PHONE">
              <label class="field-group-primary__input-label" for="mce-PHONE">Phone (optional)</label>
            </div>
          </div>

          <div class="field-group-primary">
            <input type="email" name="EMAIL" class="field-group-primary__input" placeholder="Email Address" id="mce-EMAIL">
            <label class="field-group-primary__input-label" for="mce-EMAIL">Email Address</label>
          </div>
          <p class="email-capture--p">
            By submitting this form, you are consenting to receive communications from Seven Acre Dairy Company. See <a class="email-capture--link" href="/sweepstakes-rules" target="_blank">full sweepstakes rules</a>.
          </p>
          
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true">
            <input type="text" name="b_4107b8ea5c4588a0f823e7aa2_3620838258" tabindex="-1" value="">
          </div>
          <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button button-primary email-capture--button subscribe-button">

        </form>
      </div>
    </section>

    <section class="footer__company-details">

      <div class="company-details--container">
        <div class="company-details--social">
          <h2 class="subheading-primary company-details--h2">Follow Us On Social</h2>
          <div class="company-details--social-container">
            <a class="company-details--social-link" href="https://www.facebook.com/sevenacredairyco/" target="_blank" aria-label="Follow us on Facebook">
              <img class="company-details--social-icon" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/social-icon_facebook_circle_pink.svg" alt="Follow us on Facebook">
            </a>
            <a class="company-details--social-link" href="https://www.instagram.com/sevenacredairyco/" target="_blank" aria-label="Follow us on Instagram">
              <img class="company-details--social-icon" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/social-icon_instagram_circle_pink.svg" alt="Follow us on Instagram">
            </a>
            <a class="company-details--social-link" href="https://twitter.com/sevenacredairy" target="_blank" aria-label="Follow us on Twitter">
              <img class="company-details--social-icon" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/social-icon_twitter_circle_pink.svg" alt="Follow us on Twitter">
            </a>
          </div>
        </div>

        <img class="company-details--logo" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/seven-acre-dairy_logo_quality-submark_cream.svg" alt="Seven Acre Dairy Company | Paoli, Wisconsin | Quality Gauranteed">

        <div class="company-details--contact-us">
          <h2 class="subheading-primary company-details--h2">Have Questions?</h2>
          <a class="button button-secondary company-details--button" href="mailto:nic@sevenacredairyco.com">Contact Us</a>
        </div>
      </div>

      <p class="company-details--p">
        © 2022 Seven Acre Dairy Company. All rights reserved.
        <?php if (!is_page('privacy-policy')) : ?><br>Read our <a href="/privacy-policy">Privacy Policy</a>.<?php endif; ?>
      </p>

    </section>
  </footer>

  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/scripts/lazy-loading.min.js" async></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/scripts/main.min.js" defer></script>
  
  <?php wp_footer(); ?>
</body>
</html>
