<?php 
   
    require_once '../app/models/cidade.php';

    $cidade = new Cidade();
   
    $cidade->id = 1;
    $cidade->nome = "Itapira";
    $cidade->estado = "SP";

    echo "<pre>";
    var_dump($cidade);
    echo "</pre>;"

?>