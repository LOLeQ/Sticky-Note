
<br>
<div>
  <div class="container">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Tytuł</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Tekst</label>
    		<textarea name="body" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
            <select name = "group_id" onchange="this.form.submit()">
            <option value =''>Wybierz grupę</option>
                <?php foreach ($viewmodel as $item) : ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['title'] ?></option>
                <?php endforeach; ?>
            </select>
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Dodaj" />
    	<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Anuluj</a>
    </form>
  </div>
</div>
