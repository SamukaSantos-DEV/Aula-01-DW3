<?php 
   
    require_once '../app/models/cidade.php';

    $cidade = new Cidade("Itapira", 2);
   
    $cidade->setId(1);

    echo "<pre>";
    var_dump($cidade);
    echo "</pre>";

?>