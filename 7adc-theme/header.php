<?php
/**
 * Header template partial
 *
 * @package 7ADC_Theme
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seven Acre Dairy Company | Kitchen, Inn, & Dairy Cafe</title>
  
  <!-- Favicons -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicons/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();?>/assets/images/favicons/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri();?>/assets/images/favicons/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri();?>/assets/images/favicons/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri();?>/assets/images/favicons/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri();?>/assets/images/favicons/mstile-310x310.png" />

  <!-- Stylesheets -->
  <!-- User Styles -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  <!-- Adobe Typekit Styles -->
  <link rel="stylesheet" href="https://use.typekit.net/ahv0yhw.css">

  <!-- Image meta tags for social media -->
  <meta property="og:image" content="<?php if(is_front_page()): echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-hotel-restaurant-cafe-butter-cheese-ice-cream_desktop-2x.jpg<?php elseif(is_page('our-story')): echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_desktop-2x.jpg<?php endif; ?>" />
  <meta property="og:image:secure_url" content="<?php if(is_front_page()): echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-hotel-restaurant-cafe-butter-cheese-ice-cream_desktop-2x.jpg<?php elseif(is_page('our-story')): echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_desktop-2x.jpg<?php endif; ?>" />
  <meta name="twitter:image" content="<?php if(is_front_page()): echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-hotel-restaurant-cafe-butter-cheese-ice-cream_desktop-2x.jpg<?php elseif(is_page('our-story')): echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_desktop-2x.jpg<?php endif; ?>">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VM2WKDLC3N"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VM2WKDLC3N');
  </script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- Email Pop-Up Modal -->
  <section class="email-popup__background" id="mce-email-modal">
    <div class="email-popup">
      <button class="subheading-primary email-popup__close-button" id="mce-email-modal-CLOSE" aria-label="Close Email Signup Form">&times;</button>
      <h2 class="subheading-primary email-capture--h3 email-popup--h2">Sign up for Seven Acre email updates! Be the first to know about our grand opening.</h2>
      <div class="email-capture--form-container">
        <!-- Begin Mailchimp Signup Form -->
        <form action="https://sevenacredairyco.us14.list-manage.com/subscribe/post?u=4107b8ea5c4588a0f823e7aa2&amp;id=3620838258" method="post" class="email-capture--form" novalidate>

          <div class="email-capture--input-group">
            <div class="field-group-primary">
              <input type="text" name="FNAME" class="field-group-primary__input" placeholder="First Name" id="mce-email-modal-FNAME">
              <label class="field-group-primary__input-label" for="mce-email-modal-FNAME">First Name</label>
            </div>
            <div class="field-group-primary">
              <input type="tel" name="PHONE" class="field-group-primary__input phone-input" placeholder="Phone (optional)" maxlength="14" id="mce-email-modal-PHONE">
              <label class="field-group-primary__input-label" for="mce-email-modal-PHONE">Phone (optional)</label>
            </div>
          </div>

          <div class="field-group-primary">
            <input type="email" name="EMAIL" class="field-group-primary__input" placeholder="Email Address" id="mce-email-modal-EMAIL">
            <label class="field-group-primary__input-label" for="mce-email-modal-EMAIL">Email Address</label>
          </div>
          <p class="email-capture--p email-popup--p">
            By submitting this form, you are consenting to receive communications from Seven Acre Dairy Company.
          </p>
          
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true">
            <input type="text" name="b_4107b8ea5c4588a0f823e7aa2_3620838258" tabindex="-1" value="">
          </div>
          <input type="submit" value="Sign Up" name="subscribe" id="mc-email-modal-subscribe" class="button button-secondary email-capture--button subscribe-button">

        </form>
      </div>
    </div>
  </section>

  <header class="header">
    <div class="header__decorative-line"></div>

    <?php if (!is_front_page()): ?><a class="header__logo-link" href="/" aria-label="View homepage"><?php endif; ?>
      <img class="header__logo" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/seven-acre-dairy_logo_primary_bronze.svg" alt="7 Acre Dairy Company">
    <?php if (!is_front_page()): ?></a><?php endif; ?>

    <div class="header__decorative-line"></div>
  </header>
