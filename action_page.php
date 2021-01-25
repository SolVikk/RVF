<?php
$to = "v.solopina@inbox.ru"; // емайл получателя данных из формы
$tema = "Новая анкета"; // тема полученного емайла
$message = "Имя: ".$_POST['firstname']."<br>";//присвоить переменной значение, полученное из формы name=name
$message = "Фамилия: ".$_POST['lastname']."<br>";//присвоить переменной значение, полученное из формы name=name
$message = "Отчество: ".$_POST['otname']."<br>";//присвоить переменной значение, полученное из формы name=name
$message = "Телефон: ".$_POST['phone']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: ".$_POST['email']."<br>";
$message = "Регион: ".$_POST['region']."<br>";//присвоить переменной значение, полученное из формы name=name
$message = "Род деятельности: ".$_POST['sphere']."<br>";//присвоить переменной значение, полученное из формы name=name
$message = "Опыт работы: ".$_POST['exp']."<br>";//присвоить переменной значение, полученное из формы name=name

$message .= "Дополнительная информация: ".$_POST['info']."<br>"; //полученное из формы name=email

$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=construction.html">
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо! Мы свяжемся с вами!</h1>
</body>
</html>