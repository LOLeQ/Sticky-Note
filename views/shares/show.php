<div class = "container">
<br>
	<?php if(isset($_SESSION['is_logged_in']))	: ?>	
	<a class="btn btn-success btn-share center-block" href="<?php echo ROOT_PATH; ?>shares/add">Dodaj notkę</a>
	<br>
	<?php endif; ?>

	<?php foreach ($viewmodel as $item) : ?>
		<div class="well">
			<div class = "form-group">
				<h3><?php echo $item['title']; ?></h3>
				<small><?php echo $item['create_date']; ?></small>
				<hr />
				<p><?php echo $item['body']; ?></p>
				<br />
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
						<input class="btn btn-danger" name="usun" type="submit" value="Usuń" id="<?php echo $item['id']; ?>"/>
					</form>
				</div>
		</div>
	<?php endforeach; ?>
</div>