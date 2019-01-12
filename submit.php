<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['phone'])) {

	$headers = 'From: Name Name \r\n'.
				'Reply-To: mykhailotestmail@gmail.com\r\n'.
				'X-Mailer: PHP'. phpversion();

	$theme = 'Нове повідомлення';

	$letter = 'Дані повідомлення:\r\n';
	$letter .= 'Імя: '.$_POST['name']. '\r\n';
	$letter .= 'Email: '.$_POST['email']. '\r\n';
	$letter .= 'Телефон' .$_POST['phone']. '\r\n';
	if (mail('mykhailotestmail@gmail.com', $theme, $letter, $headers)) {
		header('Location:thankyou.php');
	} else {
		header('Location: /');
	}
} else {
header('Location: /');
}