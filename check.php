<?php
  //print_r($_POST); //тут надо сохранять данные с регистрайии в базе
  $email = $_POST['email'];
  $message = $_POST['message'];
  $error = '';
  if(trim($email) == '') {
    $error = 'Введите ваш email';
    print_r($error);
  } else if (trim($message) == '') {
    $error = 'Введите ваш message';
    print_r($error);
  } else if (strlen($message) < 10) {
    $error = 'Сообщение должно быть больше 10 символов';
    print_r($error);
  }
  $subject = "=?utf-8?B?".base64_encode("Test")."?=";
  $headers = "From: $email\r\nReply-to:
  $email\r\nContent-type: text/html;charset=utf-8\r\n";
  //mail('ayanka_m@mail.ru', $subject, $message, $headers);
  header('Location: /about.php');
 ?>
