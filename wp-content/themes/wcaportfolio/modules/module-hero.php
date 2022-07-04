<!-- Hero -->

<?php
$titulo = get_field('title');
$content = get_field('content');
$buttonTitle = get_field('button_title');
$buttonFile = get_field('button_file');
$image = get_field('image');


?>


<section class="hero">
  <div class="hero__container">
    <div class="hero__textbox">
      <?php if ($titulo) : ?>
        <h1 class="hero__textbox__h1"><?php echo $titulo; ?></h1>
      <?php endif; ?>

      <?php if ($content) : ?>
        <p class="hero__textbox__paragraph"><?php echo $content; ?></p>
      <?php endif; ?>

      <?php if ($buttonFile) : ?>
        <a href="<?php echo $buttonFile['url']; ?>" target="_blank">
          <?php if ($buttonTitle) : ?>
            <button class="hero__textbox__button">
              <?php echo $buttonTitle; ?>
            </button>
          <?php endif; ?>
        </a>
      <?php endif; ?>


    </div>

    <div class="hero__imgbox">
      <div class="hero__imgbox__img">
        <?php if ($image) : ?>
          <?php echo add_image_size('new-size', 425.72, 290, false); ?>
          <?php echo wp_get_attachment_image($image, 'new-size'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

</section>

<!-- End Hero -->