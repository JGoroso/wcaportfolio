<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel=profile href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?
  get_template_part('modules/global/module', 'navbar')
  ?>

  <?php wp_body_open();  ?>
  <main>