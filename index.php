<html>
  <head>
    <title>Teste PHP</title>
  </head>
  <body>
    <p>SERVIDOR 1</p>
    <p>Nome dos alunos na equipe: Igor e Johan</p>
  
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
 
  
  
  <a href="https://igorbecker2.herokuapp.com/index.php">Link servidor 2</a>
  <p>dddddddddddddd</p>
  <a href="https://igorbecker2.herokuapp.com/fluxograma.pdf" download="fluxograma.pdf">PDF para ser baixado conforme solicitado</a>
  <p></p>
  <form action="calculo.php" method="post">
   Valor 1<input type="text" name="valor1" value="" />
   Valor 2<input type="text" name="valor2" value="" />                                                              
   <input type="submit" value="Enviar valores">
  </form>
  
  
 </body>
</html>
