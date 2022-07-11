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
        <p class="product-info__info-name">PRODUCT INFORMATION</p>
        <ul class="product-info__info-ul">
          <li class="product-info__info-li">SIZE: 400х800 cm</li>
          <li class="product-info__info-li">BASE COLOR: grape</li>
          <li class="product-info__info-li">BASE MATERIAL: textile</li>
          <li class="product-info__info-li">diametr: 800 cm</li>
          <li class="product-info__info-li">diametr: 620 cm</li>
        </ul>
        <a class="product-info__info-name" href="img/download/fabric options.pdf" target="_blank">fabric catalog</a>
        <a class="product-info__info-name" href="img/download/LURKING_POUF_3D_2D.rar">DOWNLOAD 2D 3D </a>
      </div>
      <div class="product-info__wrapper-row-img">
        <div class="product-info__wrapper-img ">
          <picture>
            <source srcset="img/product/1-info-puff.webp" type="image/webp">
            <img src="img/product/1-info-puff.png" alt="">
          </picture>
        </div>
        <div class="product-info__wrapper-img">
          <picture>
            <source srcset="img/product/2-info-puff.webp" type="image/webp">
            <img src="img/product/2-info-puff.png" alt="">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>
<article class="popup-order">
  <div class="popup-order__row">
    <div class="popup-order__wrapper">
      <form class="popup-order__form">
        <div class="popup-order__form-item">
          <input type="hidden" name="form-name" value="Check Price">
          <input class="popup-order__form-input" id="name" type="text" name="name" placeholder="YOUR NAME" required>
        </div>
        <div class="popup-order__form-item">
          <input class="popup-order__form-input" id="email" type="email" name="email" placeholder="YOUR EMAIL" required>
        </div>
        <div class="popup-order__form-item">
          <input class="popup-order__form-input" id="tel" type="tel" name="tel" placeholder="YOUR PHONE" required>
        </div>
        <div class="popup-order__form-item">
          <input class="popup-order__form-input" id="country" type="text" name="country" placeholder="COUNTRY OF DELIVERY" required>
        </div>
        <div class="popup-order__form-item">
          <input class="popup-order__form-input" id="address" type="text" name="address" placeholder="Address of delivery" required>
        </div>
        <div class="popup-order__form-item">
          <textarea class="popup-order__form-input" name="massege" rows="4" placeholder="YOUR COMMENT"></textarea>
        </div>


        <button class="popup-order__form-btn" type="submit">SEND</button>
      </form>
    </div>
    <div class="header__nav-overlay"></div>
  </div>
</article>

<!-- footer -->
<?php require_once 'blocks/footer.php' ?>
<!-- END footer -->