<?php
   session_start();
   if (isset ($_POST['via'])){
            $_SESSION['Livro'][] = jason_encode($_POST);
            echo ('Livro Inserido')
   }
   

?>
<!DOCTYPE html>
<html>
    <head>
        <title>pagina de requisição GET e POST</title>
    </head>
    <body>
        // Campos a serem preenchidos
        <form method="post">
            <p>0 visualizar banco de dados / 1 enviar dados</p>
            <input type="text" name="via" placeholder="0 ou 1">
            <br>
            <input type="text" name="nomeAutor" placeholder="Nome autor">
            <input type="text" name="nome" placeholder="Nome autor">
            <br>
            <input type="text" name="sobrenome" placeholder="Sobrenome autor">
            <br>
            <br>
            <input type="text" name="assuntos" placeholder="Assuntos abordados no livro">
            <br>
            <input type="submit" value="batata">
            <input type="submit" value="Inserir Livro">
        </form>

        <form method="post">
            Preencher para mostrar <br>
            Livro específico:(código) <br>
            <input type="text" name="LivroEspecifico"><br><br>
            <input type="submit" name="mostrar" value="Mostrar Livros">
         <\form>
         <br>
         <form method="post">
            <input type="submit" name="limpar" value="limpar cache">
            <\form><br>
    </body>    
</html>
