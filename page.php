<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson);
	if($_POST['via'] == "0" ) {
		print_r($dadosJsonDecodificados);
	} 
	if($_POST['via'] == "1" ) {
		
		print_r(json_encode($arrayLivro));
	}
?>
