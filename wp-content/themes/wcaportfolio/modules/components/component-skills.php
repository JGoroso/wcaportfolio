<?php

$argsSkill = array(
  'post_type' => 'skills',
  'posts_per_page' => 5,

);

$skill = new  WP_Query($argsSkill);


?>





<div class="cardSkill">
  <div class="cardSkill__title">Skills</div>
  <?php
  if ($skill->have_posts()) :
    while ($skill->have_posts()) :
      $skill->the_post();
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





<? wp_reset_postdata(); ?>

<?php endif; ?>