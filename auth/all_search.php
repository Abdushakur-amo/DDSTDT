<?php    $title = 'Профил'; include('add/top.php'); 

// $sql = "SELECT DISTINCT * FROM `donishju` WHERE `id` = '$_SESSION[idUserDonishju]'";
// $row = mysqli_fetch_assoc(mysqli_query($CONNECT, $sql));
// if ($Module and $row['id'] == $_SESSION['idUserDonishju']) $idProgiles = '
// 	<h1>Ном: '.$row["surname"].' '.$row["name"].' '.$row["name_ded"].$_SESSION["idUserDonishju"].' </h1>
// 	<div style="display:flex">
// 		<div class="profil_left"> <img width="200" src="https://us.123rf.com/450wm/mialima/mialima1603/mialima160300025/55096766-male-user-icon-isolated-on-a-white-background-account-avatar-for-web-user-profile-picture-unknown-ma.jpg?ver=6" ></div>
// 		<div class="profil_rigth" style="padding-left: 10px;"> 
// 			<p><b>ID:</b> '.$row["id"].'</p>
// 			<p><b>E-mail:</b> '.$row["email"].'</p>
// 			<p><b>ТЕЛ Студент:</b> '.$row["tel1"].'</p>
// 			<p><b>ТЕЛ Волидайн:</b> '.$row["tel2"].'</p>
// 			<p><b>Курси:</b> '.$row["kurs"].'</p>

// 		</div>
// 	</div>
// ';


?>
<style>a .alert.alert-light:hover {background: #ddd;}</style>

	<div class="container_flex">
		<div class="flex_info">
            <? 
                $SqlSearch = 'SELECT DISTINCT * FROM `donishju` WHERE `name` LIKE "%'.$_SESSION[idUserDonishju].'%" || `surname` LIKE "%'.$_SESSION[idUserDonishju].'%" ORDER BY `id`  LIMIT 0, 20';
                $query = mysqli_query($CONNECT, $SqlSearch);
                while ($Row = mysqli_fetch_assoc($query)) {
                    $_SESSION['moduleProfil'] = $Row[id];
                    $Row[id] = $Row[id];
                    echo '
                        <a href="/profile/donishju/id/'.$Row[id].'" ><div style="display:flex; align-items: center;" class="alert alert-light" role="alert"><img style="width: 53px;border-radius: 50%;border: solid 2px #666;margin-right: 5px;" src="/assets/img/userimg/'.$Row[img].'"> <p style="color:#060;">'.$Row[surname].' '.$Row[name].'</p> <p style="color:#333;">|  Факултети: '.$Row[fakultet].' |  Курси: '.$Row[kurs].'</p></div></a>
                    ';
                }
            ?>
		</div>
	</div>


<?php   include('add/button.php'); ?>