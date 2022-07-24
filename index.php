<html>
  <head>
    <title>Teste PHP</title>
  </head>
  <body>
    <?php
      echo "ola mundoooooooo";
      $path = explode('/', $_GET['path']);
      $contents = file_get_contens('db.json');
	     $json = json_decode($contens, true);
	     $method = $_SERVER['REQUEST_METHOD'];
	     header('Content-type: application/json');
	     $body = file_get_contens('php://input');
	     if($method === 'GET'){
		      if($json[$path[0]) {
			       echo json_encode($json[$path[0]]);
	 	     }else {
			       echo '[]';
		      }
	     }
    ?>
</html>
