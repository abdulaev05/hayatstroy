<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="language" content="Ru-ru" />
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/fontello.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>HayatStroy</title>
    <meta name="description" content="Фасаты для зданий по Дагестану" />
    <meta name="keywords" content="Фасады, Дагестан, Термопанели" />
  </head>
  <body>
    <div class="wrapper">
      <?php include '/WebDev/React/hayatstroy/client/templates/header.html'; ?>
      <!-- <header id="header" class="header">
        <div class="container">
          <div class="row">
            <div class="header__container">
              <a href="/client/index.html" class="logo">HayatStroy</a>
              <nav class="header__desctop-nav">
                <ul class="header__desctop-nav__items">
                  <li class="nav-item header__desctop-nav__item"><a href="/client/gallery.html" class="link">Галерея</a></li>
                  <li class="nav-item header__desctop-nav__item"><a href="#" class="link">Новинки</a></li>
                  <li class="nav-item header__desctop-nav__item"><a href="#" class="link">Хиты сезона</a></li>
                  <li class="nav-item header__desctop-nav__item"><a href="#" class="link">Новости</a></li>
                  <li class="nav-item header__desctop-nav__item"><a href="/client/about.html" class="link">О нас</a></li>
                </ul>
              </nav>
              <burger class="burger"><span></span></burger>
              <nav class="header__mobile-nav">
                <ul class="header__mobile-nav__items">
                  <li class="nav-item header__mobile-nav__item"><a href="/client/gallery.html" class="link">Галерея</a></li>
                  <li class="nav-item header__mobile-nav__item"><a href="#" class="link">Новинки</a></li>
                  <li class="nav-item header__mobile-nav__item"><a href="#" class="link">Хиты сезона</a></li>
                  <li class="nav-item header__mobile-nav__item"><a href="#" class="link">Новости</a></li>
                  <li class="nav-item header__mobile-nav__item"><a href="/client/about.html" class="link">О нас</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header> -->
      <main class="home">
        <section id="swiper">
          <div class="container">
            <div class="swiper previewSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="row"></div>
          </div>
        </section>
      </main>
      <?php include '/WebDev/React/hayatstroy/client/templates/footer.html'; ?>
      <!-- <footer id="footer" class="footer">
        <div class="container">
          <div class="row">
            <div class="footer__container">
              <div class="social-media">
                <div class="instagram">
                  <i class="icon-instagram" style="font-size: inherit; color: inherit"></i>
                </div>
                <div class="whatsapp">
                  <i class="icon-whatsapp" style="font-size: inherit; color: inherit"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer> -->
    </div>

    <script src="js/swiper-bundle.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <script src="js/swiper.js" defer></script>
    <script src="js/burger.js" defer></script>
  </body>
</html>
