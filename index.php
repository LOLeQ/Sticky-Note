<?php
// Start Session
session_start();

// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controlers/home.php');
require('controlers/shares.php');
require('controlers/users.php');
require('controlers/logout.php');
require('controlers/groups.php');


require('models/home.php');
require('models/share.php');
require('models/user.php');
require('models/logout.php');
require('models/groups.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}