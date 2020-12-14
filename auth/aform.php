<?php

	if ($_POST['edit_f']) {
		password_valid();
		if ( $_POST['password'] != $_SESSION['password'] ) message('Рамзи қуҳна хато ворид шуд!', true);
		if( $_POST['password1']  != $_POST['password2']  ) message('Рамз такрорӣ хато ворид шуд!', true);
		$_POST['password1'] = md5($_POST['password1']);
		mysqli_query($CONNECT, "UPDATE `users` SET `password` = '$_POST[password1]' ");
		message('Рамз бо мувафақият тағир дода шуд');
	}

	if ($_POST['register_donishju_f']) {
		if( !$_POST['tel2'] || !$_POST['tel1'] || !$_POST['name'] || !$_POST['surname'] || !$_POST['name_dad'] || !$_POST['mydate'] || !$_POST['city'] || !$_POST['mycity'] || !$_POST['fakultet'] || !$_POST['profesion'] || !$_POST['tahsil'] ||  !$_POST['sex']) message('Яаке аз майдонҳо холи фиристода шуд!', true);
		email_valid();
		password_valid();
		$_POST['kvota'] = '0';
		$sql = "INSERT INTO `donishju` (`id`, `name`, `surname`, `name_dad`, `fakultet`, `profesion`, `kurs`, `tahsil`, `sex`, `kvota`, `tel1`, `tel2`, `email`, `password`, `mydate`, `city`, `mycity`, `reg_date`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[name_dad]', '$_POST[fakultet]', '$_POST[profesion]', '$_POST[kurs]', '$_POST[tahsil]', '$_POST[sex]', '$_POST[kvota]', '$_POST[tel1]', '$_POST[tel2]', '$_POST[email]', '$_POST[password]', '$_POST[mydate]', '$_POST[city]', '$_POST[mycity]', NOW())";
		mysqli_query($CONNECT, $sql);
		message('Донишҷӯ дар база дохилшуд');
	}


	if ( $_POST['search_f'] ) {
		$SqlSearch = 'SELECT DISTINCT * FROM `donishju` WHERE `name` LIKE "%'.$_POST[search].'%" || `surname` LIKE "%'.$_POST[search].'%"';
		$row = mysqli_fetch_assoc(mysqli_query($CONNECT, $SqlSearch));
		if ( !$_POST['search'] || !$row['id'] ) message('Ягон донишҷӯ ёфт нашуд!', true);
		$_SESSION['idUserDonishju'] = $_POST['search'];
		message('location', 0, "all_search");
	  }

?>