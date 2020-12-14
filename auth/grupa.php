<?php    
  $RowI = mysqli_fetch_array(mysqli_query($CONNECT, 'SELECT `name` FROM `table_prof` WHERE `id` = '.$Param["id"] ));
  $Row = mysqli_fetch_array(mysqli_query($CONNECT, 'SELECT `img` FROM `donishju` WHERE `ikhtisos` = '.$Param["id"].' AND `shef` = 1' ));

  $title = $RowI['name']; 
  include('add/top.php'); 
?>
<style>a .alert.alert-light:hover {background: #ddd;} .table {color: rgb(253 253 253 / 88%);background: #f0f8ff3d;}.table td, .table th {border-top:none;}</style>


	<div class="container_flex">
		<div class="flex_info">
        <table class="table table-hover">
        <?   ?>
        <h1>Ихтисосӣ: <?=$RowI['name']?> </h1>
        <thead>
            <tr style="background: teal;border-radius: 5px 5px 0 0;">
              <th scope="col">#</th>
              <th scope="col">Ному насаб</th>
              <th scope="col">Шакли таҳсил</th>
              <th scope="col" style="position:relative;">Маълумоти иловагӣ <span class="rohbar"><a><img src="/assets/img/userimg/<?=$Row['img'];?>" style="border-radius: 50%;border: solid 5px #008080;position: absolute;right: -15px;top: -15px;width: 70px;"></a></span></th>
            </tr>
        </thead>
        <tbody >
            <? 
                
                $query = mysqli_query($CONNECT, "SELECT * FROM `donishju` WHERE `ikhtisos` = '$Param[id]'");
                $num = 0; 
                $varLocation = 'location';
                $varCommand = 'command';
                while ($Row = mysqli_fetch_assoc($query)) {
                    if( $Row['block'] == 1) $Row['block'] = 'background: #dc3545;';
                    $num++;
                    echo '    
                          <tr style="'.$Row[block].'">
                            <th scope="row">'.$num.' <a href="/profile/donishju/id/'.$Row[id].'"><img src="/assets/img/userimg/'.$Row[img].'" ></a></th>
                            <td>'.$Row[surname].' '.$Row[name].' '.$Row[name_ded].'</td>
                            <td>'.$Row[tahsil].'</td>
                            <td>
                              <a href="/grupa/controls/id/'.$Row[id].'/command/location/idikhtisos/'.$Row[ikhtisos].'" title="Перевод ба дигар ихтисос"><i class="icon-flight"></i></a> 
                              <a href="/grupa/controls/id/'.$Row[id].'/command/edit/idikhtisos/'.$Row[ikhtisos].'" title="Тағир додани донишҷӯ"><i class="icon-pencil-1"></i></a> 
                              <a href="/grupa/controls/id/'.$Row[id].'/command/block/idikhtisos/'.$Row[ikhtisos].'" title="Мувақати блок кардани донишҷӯ"><i class="icon-lock"></i></a> 
                              <a href="/grupa/controls/id/'.$Row[id].'/command/delet/idikhtisos/'.$Row[ikhtisos].'" title="Нест кардани донишҷу аз база"><i class="icon-cancel"></i></a> 
                            </td>
                          </tr>
                    ';
                }
            ?>
            </tbody>
            </table>
            <? 
            function MyCountS($p1, $name, $barobar){
              global $CONNECT, $typeF, $Param;
              $CountD = mysqli_fetch_array(mysqli_query($CONNECT, "SELECT COUNT('$p1') FROM `donishju` WHERE `$name` = '$barobar' AND `ikhtisos` = '$Param[id]'" ));               
              echo $CountD[0]; 
            }
            ?>
            <span>Шумораи умуми</span>
            <div style="display:flex; align-items: center;" class="alert alert-light" role="alert">Ҳамагӣ: <? MyCountS('id', 'ikhtisos', $Param['id']); ?> | Духтар: <? MyCountS('sex', 'sex', 'Духтар'); ?> | Писар: <? MyCountS('sex', 'sex', 'Писар'); ?> | Шартнома: <? MyCountS('tahsil', 'tahsil', 'Шартномави'); ?> | Ройгон: <? MyCountS('tahsil', 'tahsil', 'Буҷавӣ'); ?> | Квота: <? MyCountS('kvota', 'ikhtisos', $Param['id']);?>  | <a href="/grupa/controls/id/'.$Row[id].'/command/printer/idikhtisos/'.$Row[ikhtisos].'" title="Руйхатро печать кардан" style="color:#060"> > Печать <i class="icon-file-word"></i></a> 
</div>
        
		</div>
	</div>


<?php   include('add/button.php'); ?>