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
        // Aluno

        //include_once __DIR__ . '/model/Aluno/Aluno.class.php';
       // include_once __DIR__ . '/controller/AlunoController.php';


        // Instancias teste

        //$alunoTeste = new Aluno('Kelvyn', 'Pereira', '1997-12-24', 'M', 'PRETO');

        /*
         * TESTES DA CLASSE ALUNO
         */


        /*
         * Teste inserir aluno


          var_dump($alunoTeste);

          $nAluno = new AlunoController();
          $nAluno->cadastrarAluno($alunoTeste);

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


        // TESTE DE ENDERECO
        ?>
        <form method="POST" action="controller/EnderecoController.php">
            Numero<input name="numero">
            Rua<input name="rua">
            Bairro<input name="bairro">
            Cidade<input name="cidade">
            Estado<input name="estado">
            Pais<input name="pais">
            CEP<input name="cep">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
