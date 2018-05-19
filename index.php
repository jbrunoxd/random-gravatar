<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include('classes/randomizer.php');
	
	$randomizer = new Randomizer();
	
	$randomizer->randomizeGravatar();

	echo "Heyo, if all went well, Bruno's gravatar have been changed!";
?>
