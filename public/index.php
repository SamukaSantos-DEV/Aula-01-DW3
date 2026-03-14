<?php 
   
    require_once '../app/models/cidade.php';


    try{

    $cidade = new Cidade("Itapira", "sp");
   
    $cidade->setId(1);
    echo "<H2>Dados da cidade</H2>";
    echo "ID: " . $cidade->getId() . "</br>";
    echo "Nome: " . $cidade->getNome() . "</br>";
    echo "Estado: " . $cidade->getEstado() . "</br>";
    }
    catch (Exception $e){
        echo "Erro: " . $e->getMessage();
    }


?>