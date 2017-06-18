<br>
<div>
  <div class="container">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Tytuł</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Dodaj" />
    	<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>groups">Anuluj</a>
    </form>
  </div>
</div>