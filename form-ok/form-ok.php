<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="css/stylec20a.css?12" />
  <link rel="shortcut icon" href="favicon.html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title>Спасибо!</title>
</head>

<body>
  <div class="main">
    <style>
      .block-bf__sale1 {
        background: #eeb501;
        padding: 10px 0;
        text-align: center;
        font-size: 26px;
        color: #000;
        line-height: 1.3;
        text-transform: uppercase;
        font-weight: bold;
        position: relative;
        margin: 20px auto 10px;
        width: 100%;
        position: absolute;
        bottom: -10px;
      }

      .three-years {
        max-width: 100%;
        display: block;
        margin: 0 auto;
        z-index: 5;
      }

      @media screen and (max-width: 468px) {
        .block-bf__sale1 {
          display: none;
        }
      }
    </style>
    <div class="wrapper">
      <style>
        .menulog {
          display: none;
        }

        .menu {
          text-align: center;
          padding: 8px 0;
          background: #ececec;
        }

        .menu__links-item img {
          vertical-align: middle;
        }

        .menu__icon {
          display: none;
          width: 45px;
          height: 35px;
          position: relative;
          cursor: pointer;
        }

        .menu__icon span {
          display: block;
          position: absolute;
          height: 5px;
          width: 100%;
          background: #333333;
          border-radius: 9px;
          opacity: 1;
          left: 0;
          transform: rotate(0deg);
          transition: 0.25s ease-in-out;
        }

        .menu__icon span:nth-child(1) {
          top: 0px;
        }

        .menu__icon span:nth-child(2),
        .menu__icon span:nth-child(3) {
          top: 13px;
        }

        .menu__icon span:nth-child(4) {
          top: 26px;
        }

        .menu__links-item {
          display: inline-block;
          color: #333333;
          font-family: Arial;
          font-size: 14px;
          line-height: 30px;
          padding: 0 10px;
          text-transform: uppercase;
          text-decoration: none;
        }

        .menu__links-item:hover {
          text-decoration: underline;
        }

        .menu.menu_state_open .menu__icon span:nth-child(1) {
          top: 18px;
          width: 0%;
          left: 50%;
        }

        .menu.menu_state_open .menu__icon span:nth-child(2) {
          transform: rotate(45deg);
        }

        .menu.menu_state_open .menu__icon span:nth-child(3) {
          transform: rotate(-45deg);
        }

        .menu.menu_state_open .menu__icon span:nth-child(4) {
          top: 18px;
          width: 0%;
          left: 50%;
        }

        .menu.menu_state_open .menu__links {
          display: block;
        }

        @media screen and (max-width: 999px) {
          .menulog {
            width: 100%;
            max-width: 55px;
            margin-left: 8px;
            margin-top: 0px;
            display: block;
          }

          .menu {
            text-align: right;
            padding-top: 10px;
            padding-right: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
          }

          .menu__icon {
            display: inline-block;
          }

          .menu__links {
            position: fixed;
            display: none;
            top: 0;
            right: 0;
            left: 0;
            margin-top: 55px;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            overflow: auto;
          }

          .menu__links-item {
            display: block;
            padding: 10px 0;
            text-align: center;
            color: #ffffff;
          }

          .menu__links-item-mob {
            display: none;
          }
        }
      </style>
      <script src="form-ok/js/jquery.js"></script>
      <script>
        (function ($) {
          $(function () {
            $(".menu__icon").on("click", function () {
              $(this).closest(".menu").toggleClass("menu_state_open");
            });
          });
        })(jQuery);
      </script>
      <header class="header" style="display: none">
        <div class="container">
          <div class="header__row">
            <a href="#" class="header__logo"><img loading="lazy" src="images/logo.png" alt /></a>
            <div class="info">
              <button class="user-link">
                <img loading="lazy" src="images/user.png" alt />
              </button>
            </div>
          </div>
        </div>
      </header>

      <div class="desc" style="
          background: url(images/bg-bf.png) center center no-repeat;
          background-size: cover;
        ">
        <div class="container">
          <div class="desc__wrap">
            <div class="desc__content">
              <div class="desc__title">Ваша заявка принята!</div>
              <div class="desc__text">
                Мы свяжемся с Вами в ближайшее время. <br /><br /><small>А пока что рекомендуем посмотреть другие наши
                  товары. Вы
                  можете добавить их в заказ и получить одной посылкой.</small><br /><br /><big>&darr;</big>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .mob {
        display: none;
      }

      .desctop {
        display: block;
        margin: 0 auto;
      }

      @media screen and (max-width: 468px) {
        .mob {
          display: block;
          margin: 0 auto;
        }

        .desctop {
          display: none;
        }
      }
    </style>

    <div class="produkt">
      <div class="container">
        <div class="produkt__title title">наши товары</div>
        <div class="produkt__items">
          <div class="produkt__item">
            <a href="https://podlozhka.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://podlozhka.seilshox.of.by/images/1.jpeg" alt />
              </div>
              <p class="produkt__text">
                Коврик-держатель в авто
              </p>
              <div class="produkt__price">19.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://sewing-machine.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://sewing-machine.seilshox.of.by/images/061502.gif" alt />
              </div>
              <p class="produkt__text">
                Ручная швейная машинка
              </p>
              <div class="produkt__price">29.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://smart-fairy-light.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://smart-fairy-light.seilshox.of.by/images/offer3__image.jpg" alt />
              </div>
              <p class="produkt__text">
                Умная гирлянда Twinkly
              </p>
              <div class="produkt__price">39.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://garland-bachroma.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-r/wc750/6090110943.jpg" alt />
              </div>
              <p class="produkt__text">
                Уличная гирлянда Бахрома
              </p>
              <div class="produkt__price">от 39.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://manicure-5v1.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://manicure-5v1.seilshox.of.by/images/about2.jpg" alt />
              </div>
              <p class="produkt__text">
                Маникюрный набор 5 в 1
              </p>
              <div class="produkt__price">39.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://rgb-tape.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://rgb-tape.seilshox.of.by/images/h1.png" alt />
              </div>
              <p class="produkt__text">
                Светодиодная RGB лента
              </p>
              <div class="produkt__price">29.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://curtain-girlyanda.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://curtain-girlyanda.seilshox.of.by/images/description__image1.jpg" alt />
              </div>
              <p class="produkt__text">
                Гирлянда штора
              </p>
              <div class="produkt__price">29 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://auto-heater.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://auto-heater.seilshox.of.by/images/iaqx4wm3.jpg" alt />
              </div>
              <p class="produkt__text">
                Обогреватель в машину
              </p>
              <div class="produkt__price">39.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://thermo-lunchbox.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://thermo-lunchbox.seilshox.of.by/images/img0-1.webp" alt />
              </div>
              <p class="produkt__text">
                Термо ланч-бокс
              </p>
              <div class="produkt__price">от 29.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://minicam.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://basket-12.wb.ru/vol1678/part167852/167852396/images/big/2.webp" alt />
              </div>
              <p class="produkt__text">
                Мини камера А9
              </p>
              <div class="produkt__price">35.00 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://crystal-lamp.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy"
                  src="https://t0.gstatic.com/images?q=tbn:ANd9GcRMUjDdD1eHfHDagrbPO-fXEEP4Myw5XpeRvsinLZYURPNfIRGV"
                  alt />
              </div>
              <p class="produkt__text">
                Хрустальная лампа
              </p>
              <div class="produkt__price">39.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://trimmer.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://trimmer.seilshox.of.by/images/4.jpg" alt />
              </div>
              <p class="produkt__text">
                Триммер Flawless Brows
              </p>
              <div class="produkt__price">24.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://auto-vacuum.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://auto-vacuum.seilshox.of.by/images/characteristics__image1.jpg" alt />
              </div>
              <p class="produkt__text">
                Автомобильный пылесос
              </p>
              <div class="produkt__price">39.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://heated-lunch-box.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://heated-lunch-box.seilup.of.by/images/1.webp" alt />
              </div>
              <p class="produkt__text">
                Ланч-бокс с подогревом
              </p>
              <div class="produkt__price">39.99 BYN <b style="color: red">Скидка -35%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://trimmer-enzo.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://trimmer-enzo.seilmax.of.by/images/trimer-stubble-beard-enzo-31.jpg"
                  alt />
              </div>
              <p class="produkt__text">Триммер ENZO</p>
              <div class="produkt__price">29.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://auto-keeper.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://auto-keeper.seilup.of.by/images/123.png" alt />
              </div>
              <p class="produkt__text">
                Автомобильный держатель с беспроводной зарядкой
              </p>
              <div class="produkt__price">35 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://vacuum-sealer.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://vacuum-sealer.seilup.of.by/images/7.jpg" alt />
              </div>
              <p class="produkt__text">Бытовой вакууматор</p>
              <div class="produkt__price">45.00 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://ovoscherezka.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy"
                  src="https://ovoscherezka.seilmax.of.by/images/H652446d5fc8f42049ca086e8693108f8u.jpg" alt />
              </div>
              <p class="produkt__text">Ручная овощерезка</p>
              <div class="produkt__price">49.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://washmashine.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://washmashine.seilmax.of.by/images/bl2-img.jpg" alt />
              </div>
              <p class="produkt__text">
                Мини-портативная ультразвуковая стиральная машина
              </p>
              <div class="produkt__price">34.99 BYN <b style="color: red">Скидка -65%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://autojuicer.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://autojuicer.seilmax.of.by/images/photo_2023-04-25_18-22-08.png" alt />
              </div>
              <p class="produkt__text">
                Автоматическая портативная соковыжималка
              </p>
              <div class="produkt__price">54.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://valufix.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://xifulav.seilmini.of.by/images/post-im2.jpg" alt />
              </div>
              <p class="produkt__text">Костный корсет Valufix</p>
              <div class="produkt__price">29.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
          <div class="produkt__item">
            <a href="https://av-stand.seilshox.of.by/" class="produkt__wrapp">
              <div class="produkt__img">
                <img loading="lazy" src="https://av-stand.seilmax.of.by/images/2.gif" alt />
              </div>
              <p class="produkt__text">
                Антивибрационные подставки под стиральную машину
              </p>
              <div class="produkt__price">19.99 BYN <b style="color: red">Скидка -50%</b></div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- <footer class="footer">
      <div class="container">
        <div class="footer__row">
          <center>
            <p style="color: #c4c4c4;">
              ООО "СЕЙЛАП" УНП 193677300<br />
              220037, г.Минск, а/я 37<br />
              Телефон: <a href="tel:+375256545376">+375 (25) 654-53-76</a>
              <br />
              E-mail:
              <a href="mailto:seilup@mail.ru" target="_blank">
                seilup@mail.ru</a>
            </p>
            <p style="text-align: center; padding-top: 15px">
              <a href="../politics.html">Политика конфиденциальности</a>
              <br />
              <a href="../dogovor_vozvrata.html">Условия возврата и обмена</a>
              <br />
              <a href="../agreement.html">Пользовательское соглашение</a>
            </p>
          </center>
        </div>
      </div>
    </footer> -->

    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script>
      $(".slider-img").slick({
        slidesToShow: 1,
        arrows: false,
        dots: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    </script>

    <script>
      $(".hit-slider").slick({
        slidesToShow: 4,
        arrows: true,
        dots: false,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1300,
            settings: {
              slidesToShow: 3,
              arrows: false,
            },
          },
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 2,
              arrows: false,
            },
          },
          {
            breakpoint: 481,
            settings: {
              slidesToShow: 1,
              arrows: false,
              dots: true,
            },
          },
        ],
      });
    </script>

    <style>
      .hit-slider .produkt__item {
        color: #1c1e1e;
        margin: 10px auto 30px;
        padding: 0px 5px;
        width: 322px;
        text-align: center;
      }

      .hit-slider .produkt__img {
        -webkit-box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.18);
        box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.18);
      }

      .slick-prev:before,
      .slick-next:before {
        font-size: 47px;
        opacity: 0.85;
        color: #94d0cc;
      }

      .slick-prev,
      .slick-next {
        z-index: 2;
      }

      .slick-prev {
        left: -50px;
      }

      .desc .desc__img img {
        box-shadow: none;
      }
    </style>


</body>

</html>