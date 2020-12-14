<style>
	.container_flex {background: #f8f9fa;display: flex;justify-content: center;flex-wrap: wrap;border-radius: 10px;align-items: flex-start;max-width: 900px;margin: auto;margin-top: 50px;}
	.box.flex1, .box.flex2, .box.flex3 {width: 100%;text-align: center;} 
	.box.flex3 {border-top: solid 1px #666666ba;display: flex;flex-wrap: wrap;justify-content: space-evenly;}
	.box.flex3 p {width: 100%;text-align: left;}
	.box.flex1 img {width: 100px;margin-top: -50px;border-radius: 50%;border: solid 5px #f8f9fa;}
	.container_flex p, h1 {color: #333;}
	.boxp1,.boxp2 {max-width: 100%; min-width: 340px; padding-left:5px;}
	.main.clearfix {margin-bottom: 0px; }
</style>


<? 	
$query = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `name` FROM `table_prof` WHERE `id` = '$row[ikhtisos]'"));
if ( !$row["kvota"] ) $row["kvota"] = 'Надорад';

$idProgiles = '
	<div class="box flex1"> <img width="200" src="/assets/img/userimg/'.$row["img"].'" ></div>
	<div class="box flex2"> <h1>'.$row["surname"].' '.$row["name"].' '.$row["name_ded"].'</h1> </div>
	<div class="box flex3">
		<div class="boxp1">
			<p><b>ID:</b> '.$row["id"].'</p>
			<p><b>Ихтисос:</b> '.$query[name].'</p>
			<p><b>Курс:</b> '.$row["kurs"].'</p>
			<p><b>Шакли таҳсил:</b> '.$row["tahsil"].'</p>
			<p><b>Ҷинс:</b> '.$row["sex"].'</p>
			<p><b>Квота:</b> '.$row["kvota"].'</p>
			<p><b>E-mail:</b> '.$row["email"].'</p>
		</div>
		<div class="boxp2">
			<p><b>Ҷой истиқомат:</b> '.$row["mycity"].'</p>
			<p><b>Ҷой истиқомати ҳозира:</b> '.$row["city"].'</p>
			<p><b>Соли таваллуд:</b> '.$row["mydate"].'</p>
			<p><b>Рамзи лозима:</b> '.$row["password"].'</p>
			<p><b>ТЕЛ донишҷу:</b> '.$row["tel1"].'</p>
			<p><b>ТЕЛ Волидайн:</b> '.$row["tel2"].'</p>
			<p><b>Рузи бақайд гирифта:</b> '.$row["reg_date"].'</p>
		</div> 
	</div>';
?>
