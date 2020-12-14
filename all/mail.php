<?php
	if ( $_POST['sendemail_f'] ) {
		email_valid();
		if ( strlen($_POST['message']) < 10 || strlen($_POST['message']) > 100 )
			message('Длина сообщение 10 до 100 символов!');

		mail('abs@amo.tj', 'Пришла сообщени из WEB-Sity:', 'E-mail отправитель: <b>'.$_POST['email'].'</b><p>'.htmlspecialchars($_POST['message']).'</p>');
		message(' Успешно отправлен :) ');

	}

?>
