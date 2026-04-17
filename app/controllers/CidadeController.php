<?php

require_once __DIR__ . '/../models/Cidade.php';
require_once __DIR__ . '/../models/CidadeRepository.php';

class CidadeController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new CidadeRepository();
    }

    // Lista todas as cidades
    public function index()
    {
        $cidades = $this->repository->listar();

        // Envia dados para View
        require __DIR__ . '/../views/cidades/index.php';
    }

    // Cria e salva uma nova cidade
    public function store()
    {
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];

        try{
            $cidade=new Cidade($nome, $estado);
            $this->repository->salvar($cidade);
            header("Location: index.php?sucesso=1");
            exit;
        }catch(Exception $e){
            echo "Erro: ". $e->getMessage();
        }
    }

    public function create(){
        require __DIR__ . '/../views/cidades/create.php';
    }


}
