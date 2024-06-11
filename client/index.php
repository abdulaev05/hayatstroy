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
    <?php include './templates/header.html'; ?>

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
    <?php include './templates/footer.html'; ?>
  </div>

  <script src="js/swiper-bundle.min.js" defer></script>
  <script src="js/main.js" defer></script>
  <script src="js/swiper.js" defer></script>
  <script src="js/burger.js" defer></script>
</body>

</html>