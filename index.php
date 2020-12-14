<?php
if( $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == 'index') {
	$page = 'index';
	$Module = 'index';
} else{
    $page = substr($_SERVER['REQUEST_URI'], 1);
	$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$URL_Parts = explode('/', trim($URL_Path, ' /'));
	$page = array_shift($URL_Parts);
	$Module = array_shift($URL_Parts);
	if (!empty($Module)) {
		$Param = array();
		for ($i = 0; $i < count($URL_Parts); $i++) {
			$Param[$URL_Parts[$i]] = $URL_Parts[++$i];
		}
	}
 }
$CONNECT = mysqli_connect('localhost', 'root', '', 'donishkada');
if(!$CONNECT) exit('MySQL-Error!');
session_start();




if( file_exists('all/'.$page.'.php') ) include 'all/'.$page.'.php';

elseif( $_SESSION['id']  and file_exists('auth/'.$page.'.php') ) {
	if($page == 'grupa' and $Module == 'controls')
		include 'auth/controls.php';
	else 
		include 'auth/'.$page.'.php';
}

elseif( !$_SESSION['id']  and file_exists('guest/'.$page.'.php') ) include 'guest/'.$page.'.php';

else include '404.php';










function random_str( $num = 30 ){
	return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
}


function message( $text, $true = false, $url = false){
  exit('{"message":"'.$text.'", "error":"'.$true.'", "go":"'.$url.'"}');
}


function email_valid(){
	$_POST['email'] = trim($_POST['email']);
	if ( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
		message('E-mail нодуруст навишта шуд!', true);

}
function password_valid(){
	if( !preg_match('/^[A-z0-9]{4,15}$/', $_POST['password']) )
		message('Рамз хато ворид шуд, бояд аз 4 то 15, ҳарф A-z0-9 бошад!', true);
	$_POST['password'] = md5($_POST['password']);
}
function UserAdmin($p){
	if($p == 1) return 'Супер-Админ';
	else if($p == 2) return 'Администратор';
	else return 'Истифодабаранда';
}
function MiniIMG($p1, $p2, $p3, $p4, $p5 = 50){
	$Scr =  imagecreatefromjpeg($p1);
	$Size = getimagesize($p1);
	$Tmp = imagecreatetruecolor($p3, $p4);
	imagecopyresampled($Tmp, $Scr, 0, 0, 0, 0, $p3, $p4, $Size[0], $Size[1]);
	imagejpeg($Tmp, $p2, $p5);
	imagedestroy($Scr);
	imagedestroy($Tmp);
 }

function captcha_show(){
	$questions = array(
		1 => 'Имя президент Таджикистан?',
		2 => 'Кто вы?',
		3 => 'Вы робть?',
		4 => 'Кто хакер?',
		5 => 'У вас есть имя?'
	);
	$num = mt_rand(1, count($questions));
	$_SESSION['captcha'] = $num;
	echo $questions[$num];
}
function captcha_valid(){
	$answers = array(
		1 => 'эмомалӣ',
		2 => 'человек',
		3 => 'нет',
		4 => 'програмисть',
		5 => 'да'
	);
	if ( $_SESSION['captcha'] != array_search( mb_strtolower(trim($_POST['captcha'])), $answers) )
		message('Ответь на вопрос указнь не верное');
}

function nameUserID($f){ global $CONNECT; $row1 = mysqli_fetch_array(mysqli_query($CONNECT, 'SELECT `name` FROM `users` WHERE `id` = '.$f )); return $row1['name'];}











?>