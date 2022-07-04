<?php
$categorie = get_field('categorie')

?>


<?php get_header(); ?>


<div class="single">

  <div class="section">

    <div class="section__tags">
      <a href="#" class="section__tags__categorie">Works</a>

      <span><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0.645917 12.854C0.599354 12.8076 0.562411 12.7524 0.537204 12.6916C0.511998 12.6309 0.499023 12.5658 0.499023 12.5C0.499023 12.4342 0.511998 12.3691 0.537204 12.3084C0.562411 12.2476 0.599354 12.1925 0.645917 12.146L6.29292 6.50001L0.645917 0.854007C0.599429 0.807519 0.562553 0.75233 0.537394 0.69159C0.512235 0.630851 0.499285 0.56575 0.499285 0.500007C0.499285 0.434263 0.512235 0.369163 0.537394 0.308423C0.562553 0.247684 0.599429 0.192494 0.645917 0.146007C0.692405 0.0995188 0.747594 0.0626421 0.808334 0.0374832C0.869073 0.0123243 0.934173 -0.000624651 0.999917 -0.000624651C1.06566 -0.00062465 1.13076 0.0123243 1.1915 0.0374832C1.25224 0.0626421 1.30743 0.0995188 1.35392 0.146007L7.35392 6.14601C7.40048 6.19245 7.43742 6.24763 7.46263 6.30837C7.48784 6.36912 7.50081 6.43424 7.50081 6.50001C7.50081 6.56577 7.48784 6.63089 7.46263 6.69164C7.43742 6.75239 7.40048 6.80756 7.35392 6.85401L1.35392 12.854C1.30747 12.9006 1.2523 12.9375 1.19155 12.9627C1.13081 12.9879 1.06568 13.0009 0.999917 13.0009C0.93415 13.0009 0.869028 12.9879 0.808283 12.9627C0.747538 12.9375 0.692363 12.9006 0.645917 12.854Z" fill="black" />
        </svg>
      </span>

      <a href="#" class="section__tags__title"><?php the_title() ?></a>
    </div>


    <div class="section__info">
      <div class="section__info__yearpill"><?= get_the_date('Y') ?></div>
      <div class="section__info__tags"><?= $categorie ?></div>
    </div>


    <!-- Content -->


    <div class="content">

      <?php the_content() ?>


    </div>


    <!-- End Content -->

  </div>
</div>


<?php get_footer(); ?>