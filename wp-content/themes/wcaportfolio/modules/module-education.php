<?php
$education = array(
  'post_type' => 'education',
);

$education = new  WP_Query($education);



?>
<?php
if ($education->have_posts()) :
  while ($education->have_posts()) :
    $education->the_post();
    $from = get_field('from');
    $to = get_field('to');
?>
    <div class="edublock">
      <h3 class="edublock__where">
        <?php the_title() ?>
      </h3>
      <span class="edublock__when"><?php echo $from ?> <span>|</span> <span><?php echo $to ?></span></span>

      <?php the_content() ?>

    </div>

  <?php endwhile; ?>
  <? wp_reset_postdata(); ?>

<?php endif; ?>