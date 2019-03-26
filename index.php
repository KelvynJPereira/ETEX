<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
      include_once './model/Aluno.class.php';
      include_once './controller/AlunoController.class.php';
       
   
        $p1 = new Aluno();
        $p1->setNome("Kelvyn");
        
        $novoAluno = new AlunoController();
        $novoAluno->cadastrarAluno($p1);
        
        
    
        
        ?>
    </body>
</html>
