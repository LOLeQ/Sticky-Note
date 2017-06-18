
<html>
<head>
	<title>Sticky Note!</title>
	<link rel="Shortcut icon" href="<?php echo ROOT_URL; ?>logo.png" />
	<link href="<?php echo ROOT_URL; ?>assets/css/bootstrap.css" rel="stylesheet" >
	<link href="<?php echo ROOT_URL; ?>assets/css/style.css" rel="stylesheet" >
		<link href="<?php echo ROOT_URL; ?>assets/css/style.css" rel="stylesheet" >

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="<?php echo ROOT_URL; ?>logo.png" width="50px" />
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Strona główna</a></li>
        <?php if(isset($_SESSION['is_logged_in']))	: ?>
            <li><a href="<?php echo ROOT_URL; ?>shares">Notatki</a></li>
            <li><a href="<?php echo ROOT_URL; ?>groups">Grupy</a></li>
        <?php endif; ?>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          	<?php if(isset($_SESSION['is_logged_in']))	: ?>
          		<li><a href="<?php echo ROOT_URL; ?>">Witaj <?php echo $_SESSION['user_date']['name']; ?></a></li>
            	<li><a href="<?php echo ROOT_URL; ?>users/logout">Wyloguj się</a></li>
          	<?php else : ?>
            	<li><a href="<?php echo ROOT_URL; ?>users/login">Zaloguj się</a></li>
            	<li><a href="<?php echo ROOT_URL; ?>users/register">Załóż konto</a></li>
        	<?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

	<?php Messages::display(); ?>
		<?php require($view); ?>
	<script src="assets/js/jquery.js"></script>
</body>
</html>


