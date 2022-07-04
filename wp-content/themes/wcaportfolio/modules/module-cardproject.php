<?php

$args = array(
  'post_type' => 'works',
  'posts_per_page' => 3
);

$works = new  WP_Query($args);
?>

<?php
if ($works->have_posts()) {
  while ($works->have_posts()) {
    $works->the_post();
    $categorie = get_field('categorie');
    get_template_part('modules/components/component', 'work');
  }
}
wp_reset_postdata();
?>
