<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-http-equiv="X-UA-Compatible"= content="ie=edge">
    <link rel="shortcut icon" href="/img/TreeWhite.png" type="image/png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="js/script.js"></script>
    <title>Древо семьи</title>
  </head>
  <body>
    <?php require "blocks/header.php"?>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light blockWbg">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal txt">Создайте генеалогическое древо своей семьи</h1>
        <div class="container mt-5">
          <a class="btn btn-light" href="#">Войти</a>
          <a class="btn btn-light" href="#">Регистрация</a>
        </div>

      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="container mt-5">
      <h3 class="mb-5">Ваши возможности</h3>
      <div class="d-flex flex-wrap">
        <div class="card">
          <div class="card-body">
            <img src="img/1.jpg" alt="" class="img-thumbnail">
            <h2 class="card-title pricing-card-title mt-5">Древо семьи</h2>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Узнайте историю вашей семьи.</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="img/2.jpg" alt="" class="img-thumbnail">
            <h2 class="card-title pricing-card-title mt-5">Доступ</h2>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Свяжитесь со своими дальними родственниками и поздравьте их с праздниками.</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="img/4.jpg" alt="" class="img-thumbnail">
            <h2 class="card-title pricing-card-title mt-5">Фотоальбом</h2>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Смотрите старые фотографии и узнайте на кого Вы похожи.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container pt-4 my-md-5 pt-md-5 border-top">
      <h3 class="mb-5">Информация</h3>
      <p class="text-justify">Генеалогическое древо - место, где Вы сможете
        найти своих родственников, узнать о близких Вашей семьи и увидеть
        целую картину Вашей родословной. Здесь Вы сможете проследить
        происхождение Вашей фамилии, Вашего рода.</p>
    </div>



    <div class="container pt-4 my-md-5 pt-md-5 border-top">
      <h3 class="mb-5">Фотоальбом</h3>
    </div>
    <div class="container">


<!-- Grid row -->
<div class="gallery" id="gallery">

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="img/alb/alb1.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="img/alb/alb2.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="img/alb/alb6.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="img/alb/alb4.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="img/alb/alb3.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="img/alb/alb5.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

    </div>
<!-- Grid row -->

    </div>

    <?php require "blocks/footer.php"?>
  </body>
</html>
