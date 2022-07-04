<div class="fworks__worklist">

  <div class="projectscard">
    <?php echo the_post_thumbnail(); ?>


    <div class="projectscard__info">
      <div class="projectscard__title">
        <a href="<?php echo get_the_permalink(); ?>">

          <h4><?php echo the_title(); ?></h4>
        </a>
      </div>


      <div class="projectscard__secondaryinfo">
        <div class="projectscard__secondaryinfo__yearpill"><?= get_the_date('Y') ?></div>
        <div class="projectscard__secondaryinfo__category"><?= $categorie ?></div>
      </div>
      <div class="projectscard__description"> <?php echo the_excerpt(); ?> </div>
    </div>
  </div>
</div>