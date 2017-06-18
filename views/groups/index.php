<div class = "container">
<br>
	<?php if(isset($_SESSION['is_logged_in']))	: ?>	
	<a class="btn btn-success btn-share center-block" href="<?php echo ROOT_PATH; ?>groups/add">Dodaj nową grupę</a><br>
	<?php endif; ?>

	<?php foreach ($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['title']; ?><input class= "btn pull-right btn-danger" name="usun" type="submit" value="Usuń" id="<?php echo $item['id']; ?>"/></h3>
			

			<br />
		</div>
	<?php endforeach; ?>
</div>