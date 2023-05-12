<?php include('src/config.php'); ?>
<!DOCTYPE html>
<html lang="uk-UA">
<head>
  <?php include "includes/head.php"; ?>
</head>

<body
  class="home page-template page-template-elementor_canvas page page-id-12 wp-custom-logo e-lazyload elementor-default elementor-template-canvas elementor-kit-14 elementor-page elementor-page-12">

  <div class="container_main">
      <div class="elementor elementor-12">
  <header class="header_main">
  <?php include "includes/hero.php"; ?>
  </header>
        <main>
        <?php include "includes/about_us.php"; ?>
        <?php include "includes/price.php"; ?>
        <?php include "includes/price_accord.php"; ?>
        <?php include "includes/portfolio.php"; ?>
        <?php include "includes/photo_workers.php"; ?>
        <?php include "includes/registration.php"; ?>
        <?php include "includes/review.php"; ?>
        <?php include "includes/our_advantages.php"; ?>
        <?php include "includes/location.php"; ?>
        </main>
        <?php include "includes/footer.php"; ?>
      </div>
    </div>
    <?php include "includes/scripts_link.php"; ?>
</body>
</html>