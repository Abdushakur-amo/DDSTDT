<?php
	$title = 'Тасдиқ';
 	include('add/top.php');
 ?>

	<div class="container_flex">
		<div class="flex_info">
			<h1>Лутфан тасдиқ кунед</h1>

			<?  if ($_SESSION['confirm']['code']) echo '<div class="alert alert-primary" role="alert"> Ваш код подтверждение: <b>'.$_SESSION['confirm']['code'].'</b> </div>'; ?>
			<br><input type="email" id="code" class="form-control" placeholder="Коди дар почтаатон фиристодаро дохил кунед">
			<br><input type="submit" onclick="post_query('gform', 'confirm', 'code');"  value="Тасдиқ" class="btn btn-primary">
			<p>Коди навро нусхабардори кунед ва ба саҳифаи дохилшави дароед -> <a href="/index"> Дохилшави </a></p>
		</div>
	</div>

<?php   include('add/button.php'); ?>
