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
      <h3> Мой профиль </h3>
    </div>
    <div class="container card card-body mt-5">
      <nav class="navbar">
        <h5 class="my-0 mr-md-auto font-weight-normal">Фамилия Имя Отчество</h5>
        <button type="button" class="btn btn-outline-dark mr-2">Фотографии</button>
        <button type="button" class="btn btn-outline-dark mr-2">Контакты</button>
        <button type="button" class="btn btn-outline-dark">Связи</button>
      </nav>
    </div>
    <div class="container card card-body mt-5">
        <div class="card-group mt-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Биография</h5>
              <p class="card-text">Биогра́фия (др.-греч. βίος «жизнь» + γράφω «пишу»; букв. «жизнеописание») — описание жизни человека, сделанное другими людьми или им самим (автобиография).
                  Биография включает в себя не только основные факты жизни, такие как образование, работа, семейные отношения и смерть; она также изображает опыт человека во время событий. В отличие от профиля или автобиографии (резюме), биография представляет историю жизни субъекта, выделяя различные аспекты его жизни, в том числе интимных подробностей, и может включать в себя анализ личности субъекта.
                  Биографические произведения обычно не являются художественной литературой, но художественная литература также может использоваться для изображения жизни человека. Встречается в различных средствах массовой информации, от литературы до кино, образуют жанр, известный как биография.</p>
                <p class="card-text"><small class="text-muted"><a class="text-dark" href="#">Изменить информацию</a></small></p>
            </div>
          </div>
          <div class="card ml-3">
            <figure class="figure m-5" >
              <img src="img/myProfile.jpg" class="figure-img img-fluid rounded-pill">
            </figure>
          </div>
        </div>
      </div>
    <?php require "blocks/footer.php"?>
  </body>
</html>
