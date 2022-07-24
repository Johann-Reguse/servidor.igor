    <?php
      $dadosJson = file_get_contents('db.json');
      $dadosJsonDecodificados = json_decode($dadosJson);
      //print_r($dadosJsonDecodificados);
      foreach($dadosJsonDecodificados->clientes as $cliente) {
        echo $cliente->id . ' - ' . $cliente->nome . PHP_EQL;
      }
    ?>
