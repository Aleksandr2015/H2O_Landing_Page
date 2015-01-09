<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$time = $_POST['time'];
$text = $_POST['text'];
$message = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><body>';
$message .= '<h3>Имя:</h3>'.$name.'<h3>Телефон:</h3>'.$phone.'<h3>Желаемое время звонка:</h3>'.$time.'<h3>Текст сообщения:</h3>'.$text;
$message .= '</body></html>';
$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=utf-8"."\r\n"; // можно отправлять письмо в html
$headers .= "From: H2O+";
mail('h2o.tob@mail.ru', 'Заявка c нашего лендинга', $message, $headers);
header("location: ".$_SERVER['HTTP_REFERER']);
//header("Location: after-send.html");
exit;
?>