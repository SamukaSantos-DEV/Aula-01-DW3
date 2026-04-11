<?php

require_once '../app/models/Cidade.php';
require_once '../app/models/CidadeRepository.php';

try {
    $repository = new CidadeRepository();
    $cidade = new Cidade("Mogi Mirim", "SP");
    $repository->salvar($cidade);
    echo "<h3>Cidade salva com sucesso!</h3>";

    $cidades = $repository->listar();
    foreach ($cidades as $cidade) {
        echo "ID: " . $cidade->getId() . "<br>"; 
        echo "Nome: " . $cidade->getNome() . "<br>";
        echo "Estado: " . $cidade->getEstado() . "<br>";
        echo "<hr>";
    }


} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();

}

?>