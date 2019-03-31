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

        /*
         * TESTES DA CLASSE ALUNO
         */
        
        
        /*
         * Teste inserir aluno
       
         $al = new Aluno('Kelvyn', 'Pereira', '1997-12-24', 'M', 'PRETO');
     
          var_dump($p1);

         $nAluno = new AlunoController();
         $nAluno->cadastrarAluno($al);
        
        // OK! 
          
        */
         
        /*
         * Teste listar aluno
        
        $listar = new AlunoController();
        $listar->listarAlunos();
        
        // OK!
         
        */
        
        /*
         * Teste consulta unica aluno
       
         $buscar = new AlunoController();
         $buscar->buscarAluno(1);
          
         // OK !
     
         */
      
        
        /*
         *  Teste excluir aluno
        
           $excluirAluno = new AlunoController();
           $excluirAluno->excluirAluno(9);
        
        
        // OK"
           
        */
        /*
         * Teste editar aluno
        
        
            $aluno1 = new Aluno('Elyxandre', 'Guedes', '1998-01-21', 'M', 'PRETO');
        
            $editarAluno = new AlunoController();
            $editarAluno->editarAluno($aluno1, 2);
        
        // OK!
       
         * Lembrar que as classes são instanciadas no controler, não aqui.
         */

        ?>
    </body>
</html>
