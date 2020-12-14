<?php  $title = 'Донишкадаи дизайни Тоҷикисто.'; include('add/top.php'); ?>
<style> .table {color: rgb(253 253 253 / 88%);background: #f0f8ff3d;}.table td, .table th {border-top:none;}</style>


<?php 
  if( !$_SESSION['id'] ){
    include 'add/login.php';
  } else if( $_SESSION['id'] ) {
    echo '
      <h1>Руйхати донишҷӯёни факултети (Дизайн)</h1>
      <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Ихтисос</th>
          <th scope="col">Роҳбари гуруҳ</th>
          <th scope="col">Курс</th>
        </tr>
      </thead>
      <tbody>';

    $query = mysqli_query($CONNECT, "SELECT * FROM `table_prof`");
    $num = 0; 
    while ($Row = mysqli_fetch_assoc($query)) {
      $num++;
      echo '   
          <tr>
            <th scope="row">'.$num.'</th>
            <td><a href="/grupa/design/id/'.$Row[id].'">'.$Row[name].'</a></td>
            <td>'.$Row[teacher].'</td>
            <td>'.$Row[kurs].'</td>
          </tr>';
    }
    echo '</tbody> </table>';
    
  }


?>

<?php   include('add/button.php'); ?>
