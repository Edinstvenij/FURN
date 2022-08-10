<?php
$title = 'Contact';
require_once 'blocks/header.php' ?>

<div class="container">
  <section class="contact">
    <div class="row row-jcsb contact__row">
      <div class="col contact__col">
        <p class="contact__title">Are you a talented designer or experienced brand manager? Write to us, we are open to cooperation!</p>
        <p class="contact__title contact__site">Fürn.</p>
        <div class="contact__links">
          <a class="contact__link" href="mailto:furn.in.touch@gmail.com">furn.in.touch@gmail.com</a>
          <p class="contact__link">Ukraine, Odessa 65000</p>
          <a class="contact__link" href="tel:+380961918177">+380961918177</a>
        </div>
      </div>
      <div class="col contact__col">
        <p class="contact__title">Enter your e-mail to be the first to know about our new products!</p>
        <form class="form" action="telegram.php" method="POST">
          <div class="col form__col">
            <input name="form-name" type="hidden" value="Form contact page">
            <input class="form__input" id="user-name" type="text" name="name" placeholder="YOUR NAME" minlength="2" maxlength="20" required>
            <input class="form__input" id="user-email" type="email" name="email" placeholder="YOUR EMAIL" required>
            <button id="tg-form-btn" class="form__button" type="submit">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row contact__row">
      <ul class="row menu__social-ul contact__socila-ul">
        <li class="menu__social-li contact__socila-li"><a href="https://www.instagram.com/furn_furn_furn/" target="_blank">Instagram</a> </li>
        <li class="menu__social-li contact__socila-li"><a href="https://www.behance.net/furnmanufacture" target="_blank">Behance</a></li>
        <li class="menu__social-li contact__socila-li"><a href="tel:+380 96 191 8177" target="_blank">Telegram</a></li>
        <li class="menu__social-li contact__socila-li"><a href="https://www.pinterest.com/fmanufacture/" target="_blank">Pinterest</a></li>
        <li class="menu__social-li contact__socila-li"><a href="https://wa.me/message/6F3P4J5BBHEZA1" target="_blank">Whatsapp</a></li>
      </ul>
    </div>
  </section>
</div>

<?php require_once 'blocks/footer.php' ?>