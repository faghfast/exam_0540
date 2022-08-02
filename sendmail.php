<?php

$name = $_POST['name'];
$email = trim(mb_strtolower($_POST['email']));
$mmessage = $_POST['message'];
$to = 'fig.99@bk.ru';
$subject = 'Обратная связь';


mail(
  $to,
  $subject,
  "Имя: $name \nEmail: $email \nСообщение: $mmessage"
);
mail(
  $email,
  $subject,
  "$name, спасибо за обращение! Мы скоро свяжемся с Вами)"
);



$result = "Все прошло успешно. Мы скоро свяжемся с Вами ;)\nНе забудте проверить вкладку со спамом, вдруг наши письма находятся там?"; // переменная с ответом
header("Content-type: application/json"); // спец метод
echo json_encode($result); // собственно сам json, вместо echo можно писать return разницы нет
