<?php
/**
 * Our Story page template
 * 
 * @package 7ADC_Theme
 */

get_header(); ?>

  <main class="page__content our-story__content">

    <section class="hero">
      <picture>
        <source 
          media="(min-width: 48.75em)" 
          srcset="<?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_desktop-1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_desktop-2x.jpg 2x"
          height="1280" 
          width="555" 
          loading="eager"
        >
        <source 
          srcset="<?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_mobile-1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_mobile-2x.jpg 2x"
          height="462" 
          width="600" 
          loading="eager"
        >
        <img 
          class="hero__image" 
          src="<?php echo get_template_directory_uri();?>/assets/images/seven-acre-dairy-company-paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_mobile-2x.jpg" 
          alt="The dairy farmers of the Paoli Cheese Factory Association pose for a photo in front of their delivery truck" 
          height="462" 
          width="600" 
          loading="eager"
        >
      </picture>
      <div class="hero__overlay our-story__hero-overlay"></div>
    </section>

    <section class="title-container title-container--skinny">
      <div class="title-container__inner">
        <h1 class="heading-primary title-container__h1">Our Story</h1>
        <hr class="title-container__hr">
        <h2 class="subheading-primary title-container__h2">
          Our little factory on the Sugar River has witnessed more than a century of change in Wisconsin's dairy industry.
        </h2>
      </div>
    </section>

    <section class="our-story__timeline">
      <div class="timeline--icon">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/svgs/cheese-wheel-and-wedge_icon_dark-blue.svg" alt="">
      </div>
      <div class="timeline--line-container">
          <div class="timeline--line"></div>
      </div>

      <div class="timeline--text-container">
        <div class="timeline--year">
          <h3 class="subheading-primary">1888</h3>
        </div>
        <div class="timeline--title">
          <h2 class="heading-primary">Dairy Farmers Unite</h2>
        </div>
        <div class="timeline--details">
          <p>
            In 1888, a group of dairy farmers in Paoli, Wisconsin, banded together to build their community a cheese factory. They formed a cooperative called the Paoli Cheese Factory Association and constructed a modern factory on the banks of the Sugar River.
          </p>
        </div>
      </div>

      <div class="timeline--images-container">
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/paoli-dairy-factory-historic-vintage-town-map_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/paoli-dairy-factory-historic-vintage-town-map_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/paoli-dairy-factory-historic-vintage-town-map_2x.jpg"
            alt="Historic map of Paoli with Cheese Factory location" 
            height="740" 
            width="500" 
            loading="lazy"
          >
        </div>
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/new-creamery-at-paoli-wisconsin-dairy_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/new-creamery-at-paoli-wisconsin-dairy_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/new-creamery-at-paoli-wisconsin-dairy_2x.jpg"
            alt="Newspaper clipping about the new creamery at Paoli in 1888" 
            height="192" 
            width="500" 
            loading="lazy"
          >
        </div>
      </div>

      <div class="timeline--text-container">
        <div class="timeline--year">
          <h3 class="subheading-primary">1932</h3>
        </div>
        <div class="timeline--title">
          <h2 class="heading-primary">The Swiss Cheesemaker</h2>
        </div>
        <div class="timeline--details">
          <p>
            The little factory along the Sugar River adapted to changing times by making different cheeses and butters. In 1932, they hired famed Swiss cheesemaker, Otto Thalmann. Otto oversaw company operations for nearly a quarter century and made the factory known statewide. In those days, the factory was known by various names: The Paoli Cooperative Dairy Company, The Paoli Creamery, and The Paoli Co-op Creamery.
          </p>
        </div>
      </div>
      
      <div class="timeline--images-container">
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/otto-thalmann-swiss-cheesemaker-paoli-creamery_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/otto-thalmann-swiss-cheesemaker-paoli-creamery_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/otto-thalmann-swiss-cheesemaker-paoli-creamery_2x.jpg"
            alt="Otto Thalmann, the Swiss cheesemaker" 
            height="457" 
            width="500" 
            loading="lazy"
          >
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/paoli-creamery-1938-statement-for-stockholders-butter-cheese-department_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/paoli-creamery-1938-statement-for-stockholders-butter-cheese-department_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/paoli-creamery-1938-statement-for-stockholders-butter-cheese-department_2x.jpg"
            alt="Paoli Creamery Company statement for stockholders in 1938" 
            height="770" 
            width="500" 
            loading="lazy"
          >
        </div>
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/wisconsin-farmers-deliver-milk-for-cheese-at-paoli-dairy-plant-dane-county_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/wisconsin-farmers-deliver-milk-for-cheese-at-paoli-dairy-plant-dane-county_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/wisconsin-farmers-deliver-milk-for-cheese-at-paoli-dairy-plant-dane-county_2x.jpg"
            alt="News clipping of Wisconsin farmer delivering milk used for butter to Paoli Creamery Co-op" 
            height="916" 
            width="500" 
            loading="lazy"
          >
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/paoli-coop-creamery-truck-historic-vintage-farmers-work-crew_2x.jpg"
            alt="Creamery crew poses for a picture in front of Paoli Dairy Company truck" 
            height="307" 
            width="500" 
            loading="lazy"
          >
        </div>
      </div>

      <div class="timeline--text-container">
        <div class="timeline--year">
          <h3 class="subheading-primary">1945</h3>
        </div>
        <div class="timeline--title">
          <h2 class="heading-primary">“Chicago Milk”</h2>
        </div>
        <div class="timeline--details">
          <p>
            After World War II, the factory expanded once again to process Grade A Fluid Milk—also called “Chicago Milk.” This created the opportunity for local dairy farmers to sell their milk to thirsty Chicago customers. At this time, the Paoli Creamery was one of the largest dairy factories in the state. 
          </p>
        </div>
      </div>
      
      <div class="timeline--images-container">
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/paoli-brand-creamery-butter-packaging_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/paoli-brand-creamery-butter-packaging_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/paoli-brand-creamery-butter-packaging_2x.jpg"
            alt="Vintage packaging for Paoli brand creamery butter" 
            height="493" 
            width="500" 
            loading="lazy"
          >
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/paoli-dairy-expands-capital-times-newspaper-headline-madison-wisconsin_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/paoli-dairy-expands-capital-times-newspaper-headline-madison-wisconsin_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/paoli-dairy-expands-capital-times-newspaper-headline-madison-wisconsin_2x.jpg"
            alt="Capital Times newspaper front page with headline about Paoli Creamery expansion in 1952" 
            height="310" 
            width="500" 
            loading="lazy"
          >
        </div>
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/paoli-dairy-creamery-cooperative-proposal-for-building-expansion-dane-county_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/paoli-dairy-creamery-cooperative-proposal-for-building-expansion-dane-county_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/paoli-dairy-creamery-cooperative-proposal-for-building-expansion-dane-county_2x.jpg"
            alt="Proposal document for Paoli Creamery expansion plans filed in Dane county" 
            height="673" 
            width="500" 
            loading="lazy"
          >
        </div>
      </div>

      <div class="timeline--text-container">
        <div class="timeline--year">
          <h3 class="subheading-primary">1955</h3>
        </div>
        <div class="timeline--title">
          <h2 class="heading-primary">Pabst Acquires Creamery</h2>
        </div>
        <div class="timeline--details">
          <p>
            In 1955, the Pabst Company acquired the company and its building. (Yes, <i>that</i> Pabst company.) Pabst expanded the company by helping local dairy farmers transition from canned milk to bulk milk deliveries. In its heyday of operations under the Pabst Company, the factory bought milk from nearly 300 dairy farmers.
          </p>
        </div>
      </div>
      
      <div class="timeline--images-container">
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/dairy-producer-for-pabst-farms-howie-zweifel-vintage-metal-sign_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/dairy-producer-for-pabst-farms-howie-zweifel-vintage-metal-sign_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/dairy-producer-for-pabst-farms-howie-zweifel-vintage-metal-sign_2x.jpg"
            alt="Vintage sign with cow illustration declaring farm owner a producer for Pabst Farms" 
            height="314" 
            width="500" 
            loading="lazy"
          >
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/joe-sarbacker-stands-next-to-new-cullen-farm-sign-when-he-purchased-farm-on-hwy-69_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/joe-sarbacker-stands-next-to-new-cullen-farm-sign-when-he-purchased-farm-on-hwy-69_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/joe-sarbacker-stands-next-to-new-cullen-farm-sign-when-he-purchased-farm-on-hwy-69_2x.jpg"
            alt="Joe Sarbacker stands next to road sign signifying his new farm on highway 69" 
            height="400" 
            width="500" 
            loading="lazy"
          >
        </div>
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/grade-a-chicago-milk-pumped-into-truck-at-milk-house-news-clipping_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/grade-a-chicago-milk-pumped-into-truck-at-milk-house-news-clipping_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/grade-a-chicago-milk-pumped-into-truck-at-milk-house-news-clipping_2x.jpg"
            alt="Newspaper clipping of truck filling up at the milk house" 
            height="509" 
            width="500" 
            loading="lazy"
          >
        </div>
      </div>

      <div class="timeline--text-container">
        <div class="timeline--year">
          <h3 class="subheading-primary">1980</h3>
        </div>
        <div class="timeline--title">
          <h2 class="heading-primary">The Farm Crisis</h2>
        </div>
        <div class="timeline--details">
          <p>
            The consolidation of the dairy industry and the farm crisis was the death knell for the factory. The factory couldn't keep up with Wisconsin's rapidly-changing and rapidly-industrializing dairy industry. After nearly 100 years in continuous operation, Pabst closed the doors of its Paoli facility in 1980.
          </p>
        </div>
      </div>
      
      <div class="timeline--images-container">
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/douglas-ray-holds-sign-upset-about-family-dairy-farm-closure-due-to-farm-crisis-news-clipping_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/douglas-ray-holds-sign-upset-about-family-dairy-farm-closure-due-to-farm-crisis-news-clipping_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/douglas-ray-holds-sign-upset-about-family-dairy-farm-closure-due-to-farm-crisis-news-clipping_2x.jpg"
            alt="Douglas Ray holds Pabst Producer sign he'll never use as dairy farms shutter" 
            height="556" 
            width="500" 
            loading="lazy"
          >
        </div>
        <div class="timeline--image-column">
          <img 
            srcset="<?php echo get_template_directory_uri();?>/assets/images/closing-of-paoli-creamery-plant-irks-dairy-farmers-headline-capital-times-state-news-clipping-madison-wi_1x.jpg 1x, <?php echo get_template_directory_uri();?>/assets/images/closing-of-paoli-creamery-plant-irks-dairy-farmers-headline-capital-times-state-news-clipping-madison-wi_2x.jpg 2x" 
            src="<?php echo get_template_directory_uri();?>/assets/images/closing-of-paoli-creamery-plant-irks-dairy-farmers-headline-capital-times-state-news-clipping-madison-wi_2x.jpg"
            alt="Capital Times newspaper story about the closing of dairy plant irking local dairy farmers" 
            height="548" 
            width="500" 
            loading="lazy"
          >
        </div>
      </div>

      <div class="timeline--text-container">
        <div class="timeline--year timeline--today">
          <h3 class="subheading-primary">Today</h3>
        </div>
        <div class="timeline--title">
          <h2 class="heading-primary">Restoring a Working Dairy</h2>
        </div>
        <div class="timeline--details">
          <p>
            In 2021, a group of local entrepreneurs re-formed the Paoli Cheese Factory Association to preserve this amazing piece of Wisconsin heritage. They purchased the building and received approval for a listing on the National and State Registers of Historic Places.
          </p>
          <p>
            Seven Acre Dairy Company was born.
          </p>
          <p>
            The vision for Seven Acre Dairy Company includes continuing the building's legacy and heritage of dairy production by bringing back a working dairy to make artisanal ice cream, butter, and cheese created from local milk. Seven Acre Dairy Company will also feature a restaurant, dairy cafe, and boutique hotel inspired by the region's dairy heritage and natural landscape. 
          </p>
          <p>We look forward to welcoming you in fall 2022!</p>
        </div>
      </div>
      
    </section>

    <img class="our-story__logo" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/seven-acre-dairy_logo_extended_black.svg" alt="Seven Acre | Kitchen, Inn, and Dairy Cafe">

  </main>

<?php get_footer(); ?>
