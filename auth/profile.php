<?php    $title = 'Утоқи шахсӣ'; include('add/top.php'); ?>
<?php 
	$row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `donishju` WHERE `id` = '$Param[id]'"));
	if ($Module == "donishju" and $row['id'] == $Param['id']) include 'add/donishju.php';
	else  include 'add/profil.php';
?>
<style>button.btn.btn-primary {margin-left: 0;margin-right: 10px; margin-bottom:5px} input.progile_form {margin-bottom: 5px;}</style>

	<div class="container_flex">
		<? echo $idProgiles; ?>
	</div>


<?php   include('add/button.php'); ?>