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
    <div class="container mt-5 mb-5">
      <h3 class="mt-5">Контактная форма</h3>
        <form action="check.php" method="post">
          <input type="email" name="email" placeholder="Введите почту"
          class="form-control">
          <br><textarea name="message" class="form-control" rows="8" cols="80"
          placeholder="Введите сообщение" ></textarea></br>
          <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </form>
      </div>
    <?php require "blocks/footer.php"?>
  </body>
</html>
