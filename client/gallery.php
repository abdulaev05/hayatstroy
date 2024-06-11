<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="language" content="Ru-ru" />
  <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/lightgallery-bundle.min.css" />
  <link rel="stylesheet" href="css/fontello.css" />
  <link rel="stylesheet" href="css/style.css" />

  <title>HayatStroy</title>
  <meta name="description" content="Фасаты для зданий по Дагестану" />
  <meta name="keywords" content="Фасады, Дагестан, Термопанели" />
</head>

<body>
  <div class="wrapper">
    <?php include './templates/header.html'; ?>

    <main class="gallery">
      <section id="gallery">
        <div class="container">
          <div class="row">
            <div class="gallery__container">
              <div id="gallery" class="gallery__items">
                <a href="./assets/imgs/MrNoMbre_landscape_of_a_plain_in_Utah_ef0785e1-b540-4a11-afab-f715370b25e8.png" class="">
                  <img src="./assets/imgs/MrNoMbre_landscape_of_a_plain_in_Utah_ef0785e1-b540-4a11-afab-f715370b25e8.png" alt="sef">
                </a>
                <a href="./assets/imgs/need-for-speed-payback-cyberpunk-4k-xh-3840x2400.jpg" class="">
                  <img src="./assets/imgs/need-for-speed-payback-cyberpunk-4k-xh-3840x2400.jpg" alt="sef">
                </a>
                <a href="./assets/imgs/samurai.png" class="">
                  <img src="./assets/imgs/samurai.png" alt="sef">
                </a>
                <a href="./assets/imgs/ScreenShot-2022-6-11_17-22-33.png" class="">
                  <img src="./assets/imgs/ScreenShot-2022-6-11_17-22-33.png" alt="sef">
                </a>
                <a href="./assets/imgs/wallpaperflare.com_wallpaper (1).jpg" class="">
                  <img src="./assets/imgs/wallpaperflare.com_wallpaper (1).jpg" alt="sef">
                </a>
                <!-- <div class="gallery__item">Изображение 1</div>
                <div class="gallery__item">Изображение 2</div>
                <div class="gallery__item">Изображение 3</div>
                <div class="gallery__item">Изображение 4</div>
                <div class="gallery__item">Изображение 5</div>
                <div class="gallery__item">Изображение 6</div>
                <div class="gallery__item">Изображение 7</div>
                <div class="gallery__item">Изображение 8</div>
                <div class="gallery__item">Изображение 9</div>
                <div class="gallery__item">Изображение 10</div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include './templates/footer.html'; ?>
  </div>

  <script src="js/lightgallery.min.js" defer>
    document.addEventListener("DOMContentLoaded", function() {

      lightGallery(document.querySelector('#gallery'), {
        animateThumb: false,
        zoomFromOrigin: false,
        allowMediaOverlap: true,
        toggleThumb: true,
      });
    })
  </script>
  <script src="js/main.js" defer></script>
  <script src="js/burger.js" defer></script>

</body>

</html>