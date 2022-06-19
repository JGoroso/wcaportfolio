<!-- Navbar-->

<div class="navbar">
  <div class="navbar__logo">
    <a href="/">

      <h2 class="navbar__logo__textblack">Your Name <span class="navbar__logo__textlight">Here</span><span class="navbar__logo__point">.</span></h2>

    </a>
  </div>

  <div class="navbar__topnavbar">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'main-menu'
      )
    );
    ?>

  </div>
</div>

<!-- End Navbar -->