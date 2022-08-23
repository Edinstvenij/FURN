<!-- header -->
<?php
$title = 'lounge mushroom';
require_once 'blocks/header.php' ?>
<!-- END header -->

<section class="product-preview-wrapper">
  <div class="product-preview">
    <!-- Slider main container -->
    <div class="swiper product-preview__slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper product-preview__slider-wrapper">
        <!-- Slides -->
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <img src="img/product/1-armchair-mushroom.jpg" alt="SITTING">
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <img src="img/product/2-armchair-mushroom.jpg" alt="SITTING">
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <img src="img/product/3-armchair-mushroom.jpg" alt="SITTING">
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <img src="img/product/4-armchair-mushroom.jpg" alt="SITTING">
          </div>
        </div>
      </div>
      <!-- If we need navigation buttons -->
      <div class="product-preview__slider-row-button">
        <div class="product-preview__slider-button-prev">
          <div class="product-preview__slider-wrapper-button">
            <img src="img/product/arrow-left.svg" alt="">
          </div>
        </div>
        <div class="product-preview__slider-button-next">
          <div class="product-preview__slider-wrapper-button">
            <img src="img/product/arrow-right.svg" alt="">
          </div>
        </div>
      </div>
      <!-- If we need titles and order buttons -->
      <div class="col product-preview__slider-col">
        <div class="product-preview__slider-col-wrapper">
          <p class="product-preview__slider-product-name">prowling lounge chair mushroom</p>
          <button class="product-preview__slider-product-order-button" style="background-color: #CBC2B4;">Check price</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="product-info" style="background-color: #CBC2B4;">
  <div class="product-info__wrapper">
    <div class="row product-info__row">
      <div class="col product-info__info-col">
        <p class="product-info__info-link">PRODUCT INFORMATION</p>
        <ul class="product-info__info-ul">
          <li class="product-info__info-li">UPHOLSTERY : VELOUR FABRIC</li>
          <li class="product-info__info-li">BASE COLOR: mushroom</li>
          <li class="product-info__info-li">Height: 530 mm</li>
          <li class="product-info__info-li">Widht: 940 mm</li>
          <li class="product-info__info-li">DERTH: 860 mm</li>
        </ul>
        <a class="product-info__info-link" href="img/download/How_to_care_FURN_lounge_chair.pdf" target="_blank">HOW TO CARE </a>
        <a class="product-info__info-link" href="img/download/fabric_options.pdf" target="_blank">FABRIC CATALOG</a>
        <a class="product-info__info-link" href="img/download/PROWLING_LOUNGE_CHAIR_3D_2D.rar">DOWNLOAD 2D 3D</a>
        <a class="product-info__info-link" href="delivery.php" target="_blank">SHIPPING INFORMATION</a>
      </div>
      <div class="product-info__wrapper-row-img">
        <div class="product-info__wrapper-img ">
          <img src="img/product/1-info-armchair.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- popup order -->
<?php require_once 'blocks/popup-order.php' ?>
<!-- END popup order -->

<!-- footer -->
<?php require_once 'blocks/footer.php' ?>
<!-- END footer -->