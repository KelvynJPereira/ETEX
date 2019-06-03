<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author Turyng
 */
class Database {
    
    private $db_host = 'localhost';
    private $db_name = 'bd_etex';
    private $db_username = 'root';
    private $db_password = 'root';
    
    
    public function dbConexao(){
        
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Erro na conexão ".$e->getMessage(); 
            exit;
        }   
    }
}
?>