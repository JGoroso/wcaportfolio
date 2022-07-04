<?php get_header(); ?>


<div class="works">
  <h1 class="works__title">Works</h1>


  <?php
  if (have_posts()) :
    while (have_posts()) {
      the_post();
      $categorie = get_field('categorie');
      get_template_part('modules/components/component', 'work');
    }

  else : ?>
    <h3> Nothing found... </h3>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>


  <?php get_footer(); ?>