<?

    // Перевод студент
    if( $Param['command'] == 'location'){
        if( $Param['edit'] ){
            mysqli_query($CONNECT, "UPDATE `donishju` SET `ikhtisos` = '$Param[edit]' WHERE `donishju`.`id` = '$Param[id]'");
            exit( header('location: /grupa/design/id/'.$Param['idikhtisos'] ));
        }
        $RowITM = mysqli_fetch_array(mysqli_query($CONNECT, 'SELECT `name` FROM `donishju` WHERE `id` = '.$Param["id"] ));
        echo '<h1 align="center">'.$RowITM[name].' - ро ба кадом ихтисос мефиристед?</h1>';
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
        echo '<style>ul.list-group {width: 60%;margin: auto;margin-top: 5%;}ul.list-group li {cursor: pointer;} ul.list-group a{ class:#333; }ul.list-group li:hover {background: #17a2b8;}</style><ul class="list-group">';
        
        $row = mysqli_query($CONNECT, "SELECT `id`, `name`, `kurs` FROM `table_prof`"); 
        $num = 0;
        while ($array = mysqli_fetch_assoc($row)) {
            $num++;
            if ( $Param['idikhtisos'] != $array['id'] ) 
                echo '
                    <a href="/grupa/controls/id/'.$Param[id].'/command/location/idikhtisos/'.$Param['idikhtisos'].'/edit/'.$array[id].'">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        '.$array[name].'
                        <span class="badge badge-primary badge-pill">Курст: '.$array[kurs].'</span>
                    </li>
                    </a><br>';
            else echo '
                    <a>
                    <li  style="background: #17a2b8;" class="list-group-item d-flex justify-content-between align-items-center">
                        '.$array[name].'
                        <span class="badge badge-primary badge-pill">Курст: '.$array[kurs].'</span>
                    </li>
                    </a><br>';
        }
        echo ' </ul>';    
    }
    


    // Блокировать
    if( $Param['command'] == 'block'){
        $Row = mysqli_fetch_array(mysqli_query($CONNECT, 'SELECT `block` FROM `donishju` WHERE `id` = '.$Param["id"] ));

        if ( !$Row['block'] ) {
            mysqli_query($CONNECT, "UPDATE `donishju` SET `block` = 1 WHERE `donishju`.`id` = '$Param[id]'");
            exit( header('location: /grupa/design/id/'.$Param['idikhtisos'] ));
        } else {
            mysqli_query($CONNECT, "UPDATE `donishju` SET `block` = 0 WHERE `donishju`.`id` = '$Param[id]'");
            exit( header('location: /grupa/design/id/'.$Param['idikhtisos'] ));
        }
    }

    // Удалить
    if( $Param['command'] == 'delet'){
        mysqli_query($CONNECT, "DELETE FROM `donishju` WHERE `donishju`.`id` = '$Param[id]'");
        exit( header('location: /grupa/design/id/'.$Param['idikhtisos'] ));
    }
  

?>

