<nav class="header__nav 
<?php if ($_SERVER['REQUEST_URI'] != '/' && $_SERVER[''] != 'index.php') {
  echo 'header-all-product__nav';
} ?>">
  <div class="header__nav-close header__open-close"></div>
  <ul class="header__nav-ul">
    <li class="header__nav-li"><a href="all-product.php">Shop</a></li>
    <li class="header__nav-li"><a href="designer.php">Team</a></li>
    <li class="header__nav-li"><a href="delivery.php">Delivery</a></li>
    <li class="header__nav-li"><a href="#">Catalog</a></li>
  </ul>
</nav>