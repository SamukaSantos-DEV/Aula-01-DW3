<?php

require_once __DIR__ . '/../models/CidadeRepository.php';
require_once __DIR__ . '/../models/Cidade.php';

class CidadeController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new CidadeRepository();
    }

    public function index()
    {
        $cidades = $this->repository->listar();

        require __DIR__ . '/../views/cidades/index.php';
    }

    public function store()
    {
        $cidade = new Cidade("Campinas", "SP");
        $this->repository->salvar($cidade);
        echo "<h3>Cidade salva com sucesso!</h3>";
    }


}