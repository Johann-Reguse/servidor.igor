<?php
	$path = explode('/', $_GET['path']);
	$dadosJson = file_get_contents('db.json');
	  
	$json = json_decode($dadosJson, true);
	  
	$method = $_SERVER['REQUEST_METHOD'];
  	
	header('Content-type: application/json');
	$body = file_get_contents('php://input');
	
	echo json_encode($json[$path[0]]);
	if($method === 'GET'){
		echo json_encode($json[$path[0]]);
	}    
?>
