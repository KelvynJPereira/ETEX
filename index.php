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
        include_once __DIR__.'\model\Aluno\Aluno.class.php';
        include_once __DIR__.'\controller\AlunoController.class.php';


        // Teste inserir aluno
        /* $p1 = new Aluno('Kelvyn', 'Pereira', '1997-12-24', 'M', 'PRETO');
          $p1->setMatricula("01");

          var_dump($p1);

          $novoAluno = new AlunoController();
          $novoAluno->cadastrarAluno($p1);
         * 
         */

        // Teste consultar todos os alunos
        /*
          $consultarAlunos = new AlunoController();
          $consultarAlunos->consultarAlunos();
         */


        // Teste consulta unica aluno
        /*
          $consultarAluno = new AlunoController();
          $consultarAluno->consultarAluno(2);
        */ 
        
        // Teste excluir aluno
        /*
           $excluirAluno = new AlunoController();
           $excluirAluno->excluirAluno(10);
        */
        
        // Teste editar aluno
        /*
         * 
        
            $aluno1 = new Aluno('Elyxandre', 'Guedes', '1998-01-21', 'M', 'PRETO');
        
            $editarAluno = new AlunoController();
            $editarAluno->editarAluno($aluno1, 2);
        /*
         * Corrigir erro de update
         * Lembrar que as classes são instanciadas no controler, não aqui.
         */
        
        
        
        ?>
    </body>
</html>
