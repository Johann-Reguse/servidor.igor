<?php
	$path = explode('/', $_GET['path']);
	$dadosJson = file_get_contents('db.json');
	$json = json_decode($dadosJson, true);
	
	if($POST) {	
		echo json_encode($json[$path[0]]);
	}
?>
