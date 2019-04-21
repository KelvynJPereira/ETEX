<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author Turyng
 */
abstract class Empresa {
    
    /*
     * Atributos
     */
    
    // Dados
    
    protected $id;
    protected $nome;
    protected $cnpj;
    protected $tipo;
    
    // Contato
    
    protected $foneF; // Fone fixo
    protected $foneC; // Fone comercial
    protected $site;
    protected $email;
  
    // Endereco
   
    protected $numero;
    protected $rua;
    protected $bairro;
    protected $cidade;
    protected $estado;
    protected $pais;
    protected $cep;
    
    // Logo
    
    protected $logo;
    
    

  
    
}
