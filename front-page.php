<?php get_header(); ?>

<?php get_template_part('partials/banner') ?>

<main>
  <div id='cards-section'>
    <?php get_template_part('partials/news') ?>
    <?php get_template_part('partials/featured') ?>
  </div>

  <div id="reviews-banner">
    <?php get_template_part('partials/quote') ?>
  </div>

  <div id="find-us">
    <div>
      <?php get_template_part('partials/findUs') ?>
    </div>
  </div>

<?php get_footer(); ?>