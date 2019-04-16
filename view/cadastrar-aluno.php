<?php

/*
 * Incluir verificaçao de inputs vazios
 * Incluir pop-out de cadastro
 * Incluir verificação de erros do banco
 */


// Include header
include_once __DIR__ . '/../assets/header.php';
include_once __DIR__ . '/../controller/AlunoController.class.php';
?>
<div class="center"><h3>CADASTRO DE ALUNO</h3></div>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div class="row">
        <div id="cadastro-aluno" class="col l10 m10 offset-l1">
            <?php
            include_once __DIR__ . './cadastroAluno.view.php';
            include_once __DIR__ . './cadastroEndereco.view.php';
            ?>
            <div class="col l2 offset-l10">
                <button class="btn waves-effect waves-light green" type="submit" name="btn-cadastrar">Cadastrar
                    <i class="material-icons right">add_circle</i>
                </button>
            </div>
        </div>
    </div>
</form>
</br>
<?php
// Includes
include_once __DIR__ . '/../assets/footer.php';
include_once __DIR__ . '/../model/Aluno/Aluno.class.php';

if (isset($_POST['btn-cadastrar'])):

    // Sanitização

    $filter = $_POST;

    // Dados

    $nome = $filter['nome'] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $sobrenome = $filter['sobrenome'] = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $sexo = $filter['sexo'] = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
    $nascimento = $filter['nascimento'] = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);
    $cpf = $filter['cpf'] = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $foneF = $filter['foneF'] = filter_input(INPUT_POST, 'foneF', FILTER_SANITIZE_STRING);
    $foneP = $filter['foneP'] = filter_input(INPUT_POST, 'foneP', FILTER_SANITIZE_STRING);
    $email = $filter['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cor = $filter['cor'] = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);

    // Endereco

    $numero = $filter['numero'] = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $rua = $filter['rua'] = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
    $bairro = $filter['bairro'] = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $cidade = $filter['cidade'] = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = $filter['estado'] = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $pais = $filter['pais'] = filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING);
    $cep = $filter['cep'] = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

    // Criação do objeto

    $objAluno = new Aluno($nome, $sobrenome, $nascimento, $sexo, $cpf, $cor, $foneF, $foneP, $email, $numero, $rua, $bairro, $cidade, $estado, $pais, $cep);

    // Chamada do método de cadastro

    $alunoController = new AlunoController();
    $alunoController->inserirAluno($objAluno);

// header("location: index.php");
// implementar not null nas variÃ¡veis
// implementar session de para eviar cadastro duplo

endif;
?>
