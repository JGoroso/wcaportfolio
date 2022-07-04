<?php

/**
 * Template Name: Home
 * 
 */

?>

<?php get_header(); ?>

<!-- Hero -->

<?
get_template_part('modules/module', 'hero')
?>

<!-- End Hero -->

<!-- Skills -->

<?
get_template_part('modules/module', 'skills');
?>



<!-- End Skills -->

<!-- Featured Works -->

<div class="fworks">

  <h5 class="fworks__title">Featured Works</h5>

  <?
  get_template_part('modules/module', 'cardproject')
  ?>


</div>



<!-- End Featured Works -->

<?php get_footer(); ?>