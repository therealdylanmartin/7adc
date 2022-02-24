<?php
/**
 * 404 Resource Not Found page template
 * 
 * @package 7ADC_Theme
 */

get_header(); ?>

  <main class="page__content">

    <section class="hero">
      <picture>
        <source 
          media="(min-width: 48.75em)" 
          srcset="<?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-cow-sunny-farm-page-not-found_desktop-1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-cow-sunny-farm-page-not-found_desktop-2x.jpg 2x"
          height="1280" 
          width="555" 
          loading="eager"
        >
        <source 
          srcset="<?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-cow-sunny-farm-page-not-found_mobile-1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-cow-sunny-farm-page-not-found_mobile-2x.jpg 2x"
          height="462" 
          width="600" 
          loading="eager"
        >
        <img 
          class="hero__image" 
          src="<?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-cow-sunny-farm-page-not-found_mobile-2x.jpg" 
          alt="A lone cow grazing during a bright and sunny day on the dairy farm" 
          height="462" 
          width="600" 
          loading="eager"
        >
      </picture>
      <div class="hero__overlay"></div>
    </section>

    <section class="title-container title-container--skinny four-oh-four__title-container">
      <div class="title-container__inner">
        <h1 class="heading-primary title-container__h1">Page Not Found</h1>
        <hr class="title-container__hr">
        <h2 class="subheading-primary title-container__h2">It seems you have lost your way while wandering the farm. Don't worry, we'll get you back to the barn safely.</h2>
        <a class="button button-secondary title-container__button" href="/">View Homepage</a>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
