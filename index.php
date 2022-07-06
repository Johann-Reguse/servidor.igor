<html>
 <head>
  <title>Teste PHP</title>
 </head>
 <body>
  <p>SERVIDOR 1</p>
  <p>Nome dos alunos na equipe: Igor e Johan</p>
  <a href="https://igorbecker2.herokuapp.com/fluxograma.pdf" download="fluxograma.pdf">PDF para ser baixado conforme solicitado</a>
  <p></p>
  Valor 1:<input type="text" name="valor1" size="2" maxlength="2">
  Valor 2:<input type="text" name="valor2" size="2" maxlength="2">

  <button type="button" onclick="Evento()">Enviar valores</button>

   <script>
    function Evento(){
     alert('evento funcionando')
    }
   </script>
  
 </body>
</html>
