


<?

print_r($_FILES);
$src = $_FILES['MyImg']['tmp_name'];
$fileName = $_FILES['MyImg']['name'];
// $md5 = rand('1', '100100100100');
// $resultMd5 = md5($md5);
// $fileName = $resultMd5;
// echo $fileName;
move_uploaded_file( $src, "assets/img/userimg/111.jpg" );

//MiniIMG($src, 'assest/img/userimg/'.$fileName, 200, 200);





?>
<form action="/test" method="post" enctype="multipart/form-data" >
   <input type="file" name="MyImg" >
   <input type="submit" value="Send" name="send" >

</form>
<img src="assets/img/userimg/123.jpg" alt="">
