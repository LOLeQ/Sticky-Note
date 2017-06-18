<div class="text-center">
	<header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Sticky Note!</h1>
            <h3>Zachowaj swoje notatki w jednym miejscu</h3>
            <br>
            <?php if(isset($_SESSION['is_logged_in']))	: ?>
            <a class="btn btn-dark btn-lg" href="<?php echo ROOT_PATH;?>shares">Zarządzanie notatkami</a>
            <?php else : ?>
            	<a class="btn btn-dark btn-lg" href="<?php echo ROOT_URL; ?>users/login">Zaloguj się</a>
            <?php endif; ?>
        </div>
    </header>
</div>