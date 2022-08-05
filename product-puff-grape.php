<!-- header -->
<?php
$title = 'pouf grape';
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
            <picture>
              <source srcset="img/product/1-puff-grape.webp" type="image/webp">
              <img src="img/product/1-puff-grape.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/2-puff-grape.webp" type="image/webp">
              <img src="img/product/2-puff-grape.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/3-puffs.webp" type="image/webp">
              <img src="img/product/3-puffs.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/4-puffs.webp" type="image/webp">
              <img src="img/product/4-puffs.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/5-puff-grape.webp" type="image/webp">
              <img src="img/product/5-puff-grape.png" alt="SITTING">
            </picture>
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
          <p class="product-preview__slider-product-name">lurking pouf <br> grape</p>
          <button class="product-preview__slider-product-order-button" style="background-color: #92779A;">Check
            price</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="product-info" style="background-color: #92779A;">
  <div class="product-info__wrapper">
    <div class="row product-info__row">
      <div class="col product-info__info-col">
        <p class="product-info__info-link">PRODUCT INFORMATION</p>
        <ul class="product-info__info-ul">
          <li class="product-info__info-li">UPHOLSTERY : VELOUR FABRIC</li>
          <li class="product-info__info-li">BASE COLOR: grape</li>
          <li class="product-info__info-li">diameter: 800 mm</li>
          <li class="product-info__info-li">height: 600 mm</li>
        </ul>
        <a class="product-info__info-link" href="#">HOW TO CARE </a>
        <a class="product-info__info-link" href="img/download/fabric options.pdf">FABRIC CATALOG</a>
        <a class="product-info__info-link" href="img/download/LURKING_POUF_3D_2D.rar">DOWNLOAD 2D 3D</a>
        <a class="product-info__info-link" href="delivery.php">SHIPPING INFORMATION</a>
      </div>
      <div class="product-info__wrapper-row-img">
        <div class="product-info__wrapper-img ">
          <picture>
            <source srcset="img/product/1-info-puff.webp" type="image/webp">
            <img src="img/product/1-info-puff.png" alt="">
          </picture>
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