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
        include_once './Aluno.class.php';
        include_once './AlunoController.class.php';

          /*$p1 = new Aluno('Kelvyn', 'Pereira', '1997-12-24', 'M', 'PRETO');
          $p1->setMatricula("01");

          var_dump($p1);

          $novoAluno = new AlunoController();
          $novoAluno->cadastrarAluno($p1);
           * 
           */
        
        $p2 = new Aluno('teste', 'teste', '1990-01-01', 'M', 'BRANCO');
        $p2->setMatricula("02");
        
        var_dump($p2);
        
        $novoAluno = new AlunoController();
        $novoAluno->cadastrarAluno($p2);
         
        
   
        
        ?>
    </body>
</html>
