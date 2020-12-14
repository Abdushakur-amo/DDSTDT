<?php    $title = 'Администратор'; include('add/top.php'); ?>
	<div class="container_flex">
		<div class="flex_info">
			<h1>Прямой связ с Администратор</h1>
			<ul class="send_email">
              <li><input  class="form-control" type="text" id="email" placeholder="Например: abs@mail.ru" value="<?=$_SESSION['email']?>"> </li>
              <li><textarea id="message" placeholder="Текст на Администратор..."></textarea>  </li>
              <li><button onclick="post_query('mail', 'sendemail', 'message.email');"  class="btn-shakur">Отправить</button></li>
            </ul>
		</div>
	</div>
<?php   include('add/button.php'); ?>