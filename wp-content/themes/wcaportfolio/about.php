<?php

/**
 * Template Name: About
 * 
 */

?>

<?php

/**Vars fields */

$experience = get_field('firstSubtitle');
$education = get_field('secondSubtitle');

?>


<?php get_header(); ?>


<div class="about">
  <?php the_content() ?>
</div>

<div class="experience">
  <!-- Modules -->
  <h5 class="experience__title"><?php echo $experience ?></h5>
  <?
  get_template_part('modules/module', 'experience');
  ?>

</div>
<div class="education">
  <h5 class="education__title"><?php echo $education ?></h5>
  <? get_template_part('modules/module', 'education')
  ?>
</div>
<!-- Modules -->





<?php get_footer(); ?>