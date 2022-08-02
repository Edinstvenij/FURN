<?php
$slider = [
  [
    'srcset_mobile' => 'img/header-1-swiper-mobaile.webp',
    'type_mobile' => 'image/webp',
    'srcset_desktop' => 'img/header-1-swiper.webp',
    'type_desktop' => 'image/webp',
    'img' => 'img/header-1-swiper.jpg',
    'alt' => 'fon',
  ],
  [
    'srcset_mobile' => 'img/header-2-swiper-mobaile.webp',
    'type_mobile' => 'image/webp',
    'srcset_desktop' => 'img/header-2-swiper.webp',
    'type_desktop' => 'image/webp',
    'img' => 'img/header-2-swiper.png',
    'alt' => 'fon',
  ],
  [
    'srcset_mobile' => 'img/header-3-swiper-mobaile.webp',
    'type_mobile' => 'image/webp',
    'srcset_desktop' => 'img/header-3-swiper.webp',
    'type_desktop' => 'image/webp',
    'img' => 'img/header-3-swiper.png',
    'alt' => 'fon',
  ],
  [
    'srcset_mobile' => 'img/header-4-swiper-mobaile.webp',
    'type_mobile' => 'image/webp',
    'srcset_desktop' => 'img/header-4-swiper.webp',
    'type_desktop' => 'image/webp',
    'img' => 'img/header-4-swiper.jpg',
    'alt' => 'fon',
  ],
  [
    'srcset_mobile' => 'img/header-5-swiper-mobaile.webp',
    'type_mobile' => 'image/webp',
    'srcset_desktop' => 'img/header-5-swiper.webp',
    'type_desktop' => 'image/webp',
    'img' => 'img/header-5-swiper.jpg',
    'alt' => 'fon',
  ],
];

$title = 'FURN'

?>

<!-- header -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/swiper.css" />
  <link rel="stylesheet" href="css/style.min.css">
  <title><?= $title ?></title>
</head>

<body>
  <!-- block navigation -->
  <?php require_once 'blocks/navigation.php' ?>
  <!-- END block navigation -->

  <section id="top" class="header">
    <div class="header__wrapper">
      <section class="header__body">
        <div class="swiper slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper slider__wrapper">
            <!-- Slides -->
            <?php foreach ($slider as $value) { ?>
              <div class="swiper-slide slider__slide">
                <div class="slider__wrapper-img">
                  <picture>
                    <source media="(max-width: 500px)" srcset="<?= $value['srcset_mobile'] ?>" type="<?= $value['type_mobile'] ?>">
                    <source media="(min-width: 501px)" srcset="<?= $value['srcset_desktop'] ?>" type="<?= $value['type_desktop'] ?>">
                    <img src="<?= $value['img'] ?>" alt="<?= $value['alt'] ?>">
                  </picture>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="row row-ai-center row-position-rel">
          <div class="header__logo wrapper-img wrapper-header-logo">
            <img src="img/logo.svg" alt="logo">
          </div>
          <p class="header__burger menu-toggle"><a href="#top">MENU+</a></p>
        </div>
        <div class="header__marquee">
          <div>
            <p>HI, IT'S AN UKRAINIAN FURNITURE MANUFACTURE</p>
            <p>HI, IT'S AN UKRAINIAN FURNITURE MANUFACTURE</p>
            <p>HI, IT'S AN UKRAINIAN FURNITURE MANUFACTURE</p>
            <p>HI, IT'S AN UKRAINIAN FURNITURE MANUFACTURE</p>
          </div>
        </div>
      </section>
    </div>
  </section>
  <!-- header-END -->

  <!-- footer -->
  <?php require_once 'blocks/footer.php' ?>
  <!-- footer-END -->