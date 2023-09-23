<?php
$name = $_POST['name'];
$phone = $_POST['tel'];
$city = $_POST['city'];
$email = $_POST['email'];

$to = "passionary003@gmail.com";
$date = date ("d.m.Y");
$time = date ("h:i");
$from = $email;
$subject = "Заявка c сайта";


$msg="
    Имя: $name /n
    City: $city /n
    Телефон: $phone /n
    Почта: $email";
mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
