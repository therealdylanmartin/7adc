<?php
/**
 * General page template
 * 
 * @package 7ADC_Theme
 */

get_header(); ?>

  <main class="page__content">

    <h1 class="heading-primary page__h1">
      <?php the_title(); ?>
    </h1>

    <?php while ( have_posts() ) : the_post(); ?>
      <section class="page__editor-content">
        <?php the_content(); ?>
      </section>
    <?php endwhile; ?>

  </main>

<?php get_footer(); ?>
