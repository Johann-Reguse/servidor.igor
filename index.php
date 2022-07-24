    <?php
      $dadosJson = file_get_contents('db.json');
      $dadosJsonDecodificados = json_decode($dadosJson, true);
      print_r($dadosJsonDecodificados);
      
    ?>
