<?php
	include('classes/randomizer.php');
	
	$randomizer = new Randomizer();
	
	$randomizer->randomizeGravatar();

	echo "Heyo, if all went well, Bruno's gravatar have been changed!";
?>
