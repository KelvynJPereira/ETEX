<?php

include_once __DIR__ . '/../model/Contato/Endereco.class.php';
include_once __DIR__ . '/../model/Contato/EnderecoDao.class.php';

    $endereco['numero'] = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $endereco['rua'] = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
    $endereco['bairro'] = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $endereco['cidade'] = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $endereco['estado'] = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $endereco['pais'] = filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING);
    $endereco['cep'] = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

    $endereco = new Endereco($endereco['numero'],
                $endereco['rua'], $endereco['bairro'],
                $endereco['cidade'], $endereco['estado'],
                $endereco['pais'],
                $endereco['cep']);

    $add = new EnderecoDao();
   // $add->cadastrarEndereco($endereco);
    
  /*
   *  Inserir verificaçao de superglobal $_POST vazia
   */



















