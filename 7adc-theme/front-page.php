<?php
/**
 * Home page template
 * 
 * @package 7ADC_Theme
 */

get_header(); ?>

  <main class="page__content">

    <section class="hero">
      <picture>
        <source 
          media="(min-width: 48.75em)" 
          srcset="<?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-hotel-restaurant-cafe-butter-cheese-ice-cream_desktop-1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-hotel-restaurant-cafe-butter-cheese-ice-cream_desktop-2x.jpg 2x"
          height="1280" 
          width="555" 
          loading="eager"
        >
        <source 
          srcset="<?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-hotel-restaurant-cafe-butter-cheese-ice-cream_mobile-1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-hotel-restaurant-cafe-butter-cheese-ice-cream_mobile-2x.jpg 2x"
          height="462" 
          width="600" 
          loading="eager"
        >
        <img 
          class="hero__image" 
          src="<?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-hotel-restaurant-cafe-butter-cheese-ice-cream_mobile-2x.jpg" 
          alt="A Culinary Destination on the Banks of the Sugar River - National Register of Historic Places" 
          height="462" 
          width="600" 
          loading="eager"
        >
      </picture>
      <div class="hero__overlay"></div>
    </section>

    <section class="title-container">
      <div class="title-container__inner">
        <h1 class="heading-primary title-container__h1">Seven Acre Dairy Company</h1>
        <h2 class="subheading-primary title-container__h2">Our love letter to Wisconsin…</h2>
        <hr class="title-container__hr">
        <p class="title-container__p">
          Nestled on the banks of the Sugar River in Paoli, Wisconsin, 
          <br class="title-container__br">Seven Acre Dairy Company is a painstakingly restored cheese factory reimagined as a destination for dairy lovers, modern travelers, and discerning diners.
        </p>
        <p class="title-container__p">
          Seven Acre features riverside dining, a dairy cafe, an 8-room boutique hotel, walking trails, and a few surprises along the way!
        </p>
      </div>
    </section>

    <section class="home__coming-soon">
      <img class="coming-soon--logo" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/seven-acre-dairy_logo_extended_black.svg" alt="7 Acre | Kitchen, Inn, and Dairy Cafe">
      <div class="coming-soon--social-container">
        <a class="coming-soon--social-link" href="https://www.facebook.com/sevenacredairyco/" target="_blank" aria-label="Follow us on Facebook">
          <img class="coming-soon--social-icon" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/social-icon_facebook_circle_black.svg" alt="Follow us on Facebook">
        </a>
        <a class="coming-soon--social-link" href="https://www.instagram.com/sevenacredairyco/" target="_blank" aria-label="Follow us on Instagram">
          <img class="coming-soon--social-icon" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/social-icon_instagram_circle_black.svg" alt="Follow us on Instagram">
        </a>
        <a class="coming-soon--social-link" href="https://twitter.com/sevenacredairy" target="_blank" aria-label="Follow us on Twitter">
          <img class="coming-soon--social-icon" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/social-icon_twitter_circle_black.svg" alt="Follow us on Twitter">
        </a>
      </div>
      <h2 class="heading-primary">Coming Fall 2022</h2>
      <p class="coming-soon--p">
        Just minutes from Madison or a short trip from Milwaukee, Chicago, or Minneapolis. Visit Seven Acre to enjoy artisan cheese, butter, and ice cream, an evening in one of our uniquely-appointed guest rooms, an inspired meal at our kitchen or dairy cafe, and a stroll on the property's restored oak savanna. Join us this fall!
      </p>
      <a class="button button-primary coming-soon--button" href="/our-story/">Our Story</a>
    </section>

  </main>

<?php get_footer(); ?>
