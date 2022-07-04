<?php
$argsLang = array(
  'post_type' => 'languages',
  'posts_per_page' => 5,

);

$lang = new WP_Query($argsLang);
?>





<div class="cardSkill">
  <div class="cardSkill__title">Languages</div>
  <?php
  if ($lang->have_posts()) :
    while ($lang->have_posts()) :
      $lang->the_post();
      $level = get_field('level');
  ?>


      <div class="cardSkill__skillFrame">
        <div class="skillFrame__img"> <?php echo the_post_thumbnail(); ?></div>
        <div class="skillFrame__name"><?php the_title() ?></div>
        <div class="skillFrame__dots">


          <?php

          switch ($level) {
            case 1:
              echo '
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--desactive"></span>
        <span class="skillFrame__dots--desactive"></span>
        <span class="skillFrame__dots--desactive"></span>
        <span class="skillFrame__dots--desactive"></span>';
              break;
              break;
            case 2:
              echo '
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--desactive"></span>
        <span class="skillFrame__dots--desactive"></span>
        <span class="skillFrame__dots--desactive"></span>';
              break;
            case 3:
              echo '
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--desactive"></span>
        <span class="skillFrame__dots--desactive"></span>';
              break;
            case 4:
              echo '
    <span class="skillFrame__dots--active"></span>
    <span class="skillFrame__dots--active"></span>
    <span class="skillFrame__dots--active"></span>
    <span class="skillFrame__dots--active"></span>
    <span class="skillFrame__dots--desactive"></span>';
              break;
            case 5:
              echo '
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--active"></span>
        <span class="skillFrame__dots--active"></span>';
              break;
          }
          ?>
        </div>
      </div>
    <?php endwhile; ?>
</div>
</div>



<? wp_reset_postdata(); ?>

<?php endif; ?>