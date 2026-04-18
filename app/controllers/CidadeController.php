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

    public function create()
    {
        require __DIR__ . '/../views/cidades/create.php';
    }

    public function index()
    {
        $cidades = $this->repository->listar();

        require __DIR__ . '/../views/cidades/index.php';
    }

    //Armazena os dados
    public function store()
    {
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        
        try {

            $cidade = new Cidade($nome, $estado);
            $this->repository->salvar($cidade);
            echo "Cidade salva com sucesso!";
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}