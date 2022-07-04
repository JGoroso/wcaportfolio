<?php
$experience = array(
  'post_type' => 'experience',
);

$experience = new  WP_Query($experience);



?>
<?php
if ($experience->have_posts()) :
  while ($experience->have_posts()) :
    $experience->the_post();
    $from = get_field('from');
    $to = get_field('to');
?>
    <div class="expblock">
      <h3 class="expblock__where">
        <?php the_title() ?>
      </h3>
      <span class="expblock__when"><?php echo $from ?> <span>|</span> <span><?php echo $to ?></span></span>

      <?php the_content() ?>

    </div>

  <?php endwhile; ?>
  <? wp_reset_postdata(); ?>

<?php endif; ?>