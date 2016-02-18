<?php

$ok =  "ok";
$error = "error";


// $mailto = 'market-panda@mail.ru'; //адреса получателя через ',' 

$mailto = 'fenix-centr@mail.ru, dima-mav@yandex.ru'; //адреса получателя через ',' 

$subject = "Запрос с сайта fenix-barnaul.ru";



if (isset($_POST['phone']))
{
	$msg = "Получен запрос с сайта fenix-barnaul.ru\n" .
			"Имя: " . $_POST['name'] . "\n" .
			"Телефон: ".$_POST['phone'] . "\n" .
			"Отправлено с формы: " . $_POST['formId'];
	if (mail($mailto, $subject, $msg))
	{
		echo $ok;
	} else
	{
		echo $error;
	}
}