<?php

/**
 * Template Name: Works
 * 
 */

?>


<?php get_header(); ?>

<div class="works">
  <h1 class="works__title">Works</h1>


  <?
  get_template_part('modules/works/module', 'works')
  ?>

  <?php get_footer(); ?>