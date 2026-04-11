<?php

require_once '../models/CidadeRepository.php';
require_once '../models/Cidade.php';

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

        require '../views/cidades/index.php';
       
        
    }

    public function show($id)
    {
        // Show specific city
    }

    public function create()
    {
        // Display form to create city
    }

    public function store()
    {
        // Store new city in database
    }

    public function edit($id)
    {
        // Display form to edit city
    }

    public function update($id)
    {
        // Update city in database
    }

    public function delete($id)
    {
        // Delete city from database
    }
}