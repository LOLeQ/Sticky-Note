<div class = "container">
<br>
	<?php if(isset($_SESSION['is_logged_in']))	: ?>	
	<a class="btn btn-success btn-share center-block" href="<?php echo ROOT_PATH; ?>groups/add">Dodaj nową grupę</a><br>
	<center><h2>Wybierz grupę z której chcesz zobaczyć notatkę</h2></center>
	<?php endif; ?>
	<br>
	<?php foreach ($viewmodel as $item) : ?>
		<div class="well" onmouseover="this.style.backgroundColor='#D2D7D3';" onmouseleave="this.style.backgroundColor='#f5f5f5';" onclick= "location.href='<?php echo ROOT_PATH; ?>shares/show'"" >
			<h3><?php echo $item['title']; ?></h3>
			<br />
		</div>
	<?php endforeach; ?>
</div>