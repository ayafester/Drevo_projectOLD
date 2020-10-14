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
    <div class="container mt-5">
      <h3>Древо семьи</h3>
      <div class="container card card-body mt-5">
        <nav class="navbar">
          <h5 class="my-0 mr-md-auto font-weight-normal"></h5>
          <button type="button" class="btn btn-outline-dark mr-2">Добавить</button>
          <button type="button" class="btn btn-outline-dark mr-2">Удалить</button>
          <button type="button" class="btn btn-outline-dark mr-2">Пригласить</button>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Введите ФИО" aria-label="Search">
            <button class="btn btn-dark" type="submit">Поиск</button>
          </form>
        </nav>
      </div>
      <div class="container card card-body mt-5">
        сюда добавить канвас с отрисовкой древа или поискать чтото
      </div>
    </div>
    <?php require "blocks/footer.php"?>
  </body>
</html>
