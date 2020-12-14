 <?php

/*

>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Вход
message($_POST['password']);
*/

if ($_POST['login_f']) {
	email_valid();
	password_valid();

	if( !mysqli_num_rows(mysqli_query($CONNECT, 'SELECT `id` FROM `users` WHERE `email` = "'.$_POST[email].'" and `password` = "'.$_POST[password].'" ' ))  )
		message('Ингуна истифодабаранда вуҷуд надорад!', true);
	$row = mysqli_fetch_assoc( mysqli_query($CONNECT, 'SELECT * FROM `users` WHERE `email` = "'.$_POST[email].'" ' ));
	foreach ($row as $key => $value)
		$_SESSION[$key] = $value;
	message(0, 0, 'index');
}
/*

>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Регистратсия

 */

elseif ($_POST['register_f']) {
	$name = $_POST['name'];
	email_valid();
	password_valid();
	captcha_valid();
	if( mysqli_num_rows(mysqli_query($CONNECT, 'SELECT `id` FROM `users` WHERE `email` = "'.$_POST[email].'" ' )) ){
		message('Этой E-mail занят!');
	}
	$code = random_str(5);
	$_SESSION['confirm'] = array(
		'type' => 'register',
		'name' => $name,
		'email' => $_POST['email'],
		'password' => $_POST['password'],
		'code' => $code
	);
	mail( $_POST['email'], 'Регистратсия.', "Код подтверждение регистратсия <b> $code </b>"  );
	go('confirm');
}
/*

>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Востоновление парол

*/
elseif ($_POST['restore_f']) {
	captcha_valid();
	email_valid();

	if( !mysqli_num_rows(mysqli_query($CONNECT, 'SELECT `id` FROM `users` WHERE `email` = "'.$_POST[email].'" ' ))  )
		message('Истифодабаранда ёфт нашуд!', true);
	$code = random_str(10);
	$_SESSION['confirm'] = array(
		'type' => 'recovery',
		'email' => $_POST['email'],
		'code' => $code
	);
	mail( $_POST['email'], 'Востоновление пароль.', "Коди тасдиқ барои рамз: <b> $code </b>"  );
	message('location', 0, 'confirm');
}
/*

>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  Подтвержнение

*/
elseif ($_POST['confirm_f']) {
	if ( $_SESSION['confirm']['code'] != $_POST['code'])
		message('Коди тасдиқ хато ворд шуд!', true);
	if ( $_SESSION['confirm']['type'] == 'register' ){
		mysqli_query($CONNECT, 'INSERT INTO `users` (`id`, `name`, `email`, `password`, `tel`, `admin`) VALUES (NULL, "'.$_SESSION[confirm][name].'", "'.$_SESSION[confirm][email].'", "'.$_SESSION[confirm][password].'", "+992", 0)' );
		unset($_SESSION['confirm']);
		message('location', 0, 'index');
	}

	if ( $_SESSION['confirm']['type'] == 'recovery' ){
		$newpass = random_str(10);
		mysqli_query($CONNECT, 'UPDATE `users` SET `password` = "'.md5($newpass).'" WHERE `email` = "'.$_SESSION['confirm']['email'].'"' );
		unset($_SESSION['confirm']);
		message("Рамзи нави шумо: $newpass");
	}
}





?>