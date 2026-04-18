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

    public function edit($id)
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            die("ID não fornecido");
        }

        $cidade = $this->repository->burcarPorId($id);
        if (!$cidade) {
            die("Cidade não encontrada");
        }

        require __DIR__ . '/../views/cidades/edit.php';
    }

    public function update() {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        try {
            $cidade = new Cidade($nome, $estado);
            $cidade->setId($id);
            $this->repository->atualizar($cidade);
            header("Location: index.php?sucesso=2");
            exit;
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function store()
    {
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        
        try {

            $cidade = new Cidade($nome, $estado);
            $this->repository->salvar($cidade);

            header("Location: index.php?sucesso=1");
            exit;

        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}