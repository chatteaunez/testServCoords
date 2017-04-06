<?php

  $data = json_decode(file_get_contents('../data/data.json'));

  // pour chaque données de joueur
  foreach ($data as $k) {

    // injection des nouvelles valeurs
    if ($k->id == $_POST['id']) {
      $k->posx = $_POST['posx'];
      $k->posy = $_POST['posy'];
    }
  }



  file_put_contents('../data/data.json',json_encode($data,TRUE));
 ?>
