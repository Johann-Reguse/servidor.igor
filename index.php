<html>
 <head>
  <title>Teste PHP</title>
 </head>
 <body>
  <p>SERVIDOR 1</p>
  <p>Nome dos alunos na equipe: Igor e Johan</p>
  <a href="https://igorbecker2.herokuapp.com/fluxograma.pdf" download="fluxograma.pdf">PDF para ser baixado conforme solicitado</a>
  <p></p>
  <form action="calculo.php" method="post">
   <?= $valor1 ?>
   <?= $valor2 ?>
   Valor 1<input type="text" name="v_valor1 value="<?= $valor1 ?>">
   Valor 2<input type="text" name="v_valor2 value="<?= $valor2 ?>">                                                               
   <input type="submit" value="Enviar valores">
  </form>
  
  
 </body>
</html>
