
<?php    $title = 'Вастановить парол'; include('add/top.php'); ?>
	<div class="container_flex">
		<div class="flex_info">
			<h1>Вастановит рамз</h1>
			<br><input type="text"    id="email"  class="form-control" placeholder="Дохилкунед email">
			<br><input type="text"    id="captcha"  class="form-control" placeholder="<? captcha_show(); ?>">
			<br><input type="submit"  id="submit" class="btn btn-primary" value="Вастановить" onclick="post_query('gform', 'restore', 'email.captcha');">
		</div>
	</div>

<?php   include('add/button.php'); ?>
