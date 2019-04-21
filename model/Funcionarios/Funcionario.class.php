<?php

include_once __DIR__.'../Pessoa/Pessoa.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author Turyng
 */
class Funcionario extends Pessoa{
    //put your code here
    
    private $tipo; // <= Tipo de funcionário, pode ter 1 ou + funcoes
    private $cargo;
    private $tituloFuncionario;
    private $nRegistro;
    
    
    // Contrato
    private $hEntrada; // Horário de entrada
    private $hSaida;
    private $dataAdmissao;
    private $dataDemissao;
    private $nContrato; // N° do contrato
    private $nCTPS;
    private $nPIS;
    
    // Status
    
    private $status; // Ativo ou não
    // <= Adicionar unidade de lotacao
    
    // Financeiro
    
    private $banco;
    private $agencia;
    private $conta;
    
    // Tipo de pagamento
    
    private $tipoRemuneracao;
    private $salarioFixo;
    private $salarioHA; // <= Hora aula
    
    // Formacao academica
    
    private $cursos;
    private $titulos;
    private $idiomas;
    
    
    
    
}
