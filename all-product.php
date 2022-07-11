<?php
$product = [
  [
    'filter' => "sitting",
    'name' => "prowling lounge chair <br> olive",
    'link' => "product-armchair-olive.html",
    'srcset' => "img/1-all-product.webp",
    'type' => "image/webp",
    'img' => "img/1-all-product.png",
    'alt' => "SITTING",
  ],
  [
    'filter' => "sitting",
    'name' => "prowling lounge chair<br> grape",
    'link' => "product-armchair-grape.html",
    'srcset' => "img/2-all-product.webp",
    'type' => "image/webp",
    'img' => "img/2-all-product.png",
    'alt' => "SITTING",
  ],
  [
    'filter' => "sitting",
    'name' => "prowling lounge chair <br> mushroom",
    'link' => "product-armchair-mushroom.html",
    'srcset' => "img/3-all-product.webp",
    'type' => "image/webp",
    'img' => "img/3-all-product.png",
    'alt' => "SITTING",
  ],
  [
    'filter' => "sitting",
    'name' => "lurking pouf <br> olive",
    'link' => "product-puff-olive.html",
    'srcset' => "img/4-all-product.webp",
    'type' => "image/webp",
    'img' => "img/4-all-product.png",
    'alt' => "SITTING",
  ],
  [
    'filter' => "sitting",
    'name' => "lurking pouf <br> grape",
    'link' => "product-puff-grape.html",
    'srcset' => "img/5-all-product.webp",
    'type' => "image/webp",
    'img' => "img/5-all-product.png",
    'alt' => "SITTING",
  ],
  [
    'filter' => "sitting",
    'name' => "lurking pouf <br> mushroom",
    'link' => "product-puff-mushroom.html",
    'srcset' => "img/6-all-product.webp",
    'type' => "image/webp",
    'img' => "img/6-all-product.png",
    'alt' => "SITTING",
  ],
  [
    'filter' => "table",
    'name' => "iquid table",
    'link' => "product-page.php",
    'srcset' => "img/7-all-product.webp",
    'type' => "image/webp",
    'img' => "img/7-all-product.png",
    'alt' => "table",
  ],
]

?>

<!-- header -->
<?php
$title = 'Products';
require_once 'blocks/header.php'; ?>
<!-- END header -->


<section class="product-all-product">
  <div class="container">
    <div class="grid">
      <div class="grid__body">
        <?php foreach ($product as $value) : ?>
          <div class="grid__item <?= $value['filter'] ?>">
            <p class="grid__item-name"><?= $value['name'] ?></p>
            <div class="wrapper-img wrapper-img-products">
              <a href="<?= $value['link'] ?>">
                <picture>
                  <source srcset="<?= $value['srcset'] ?>" type="<?= $value['type'] ?>">
                  <img src="i<?= $value['img'] ?>" alt="<?= $value['alt'] ?>">
                </picture>
              </a>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>

<!-- footer -->
<?php require_once 'blocks/footer.php' ?>
<!-- END footer -->