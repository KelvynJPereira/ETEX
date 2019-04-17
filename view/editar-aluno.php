<?php
// Include header
include_once __DIR__ . '/../assets/header.php';
include_once __DIR__ . '/../controller/AlunoController.class.php';

// Recuperação de id

$idEditarAluno = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<div class="center"><h3>EDITAR DE ALUNO</h3></div>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

    <!-- Envio de id para controller -->

    <input type="hidden" name="idAlunoEditar" value="<?php echo $idEditarAluno; ?>">

    <div class="row">
        <div id="cadastro-aluno" class="col l10 m10 offset-l1">
            <?php
            if ($idEditarAluno != ""):
                $buscarAluno = new AlunoController();
                $dadosAluno = $buscarAluno->buscarAluno($idEditarAluno);
                include_once __DIR__ . './editarAluno.view.php';
                include_once __DIR__ . './editarEndereco.view.php';
            endif;
            ?>
            <div id="buttons" class="col l12"></br>
                <div class="col l3 offset-l3">
                    <a class="waves-effect waves-light btn blue" href="listar-alunos.php"><i class="material-icons left">arrow_back</i>Voltar</a>
                </div>
                <div class="col l3 offset-l2">
                    <button class="btn waves-effect waves-light orange" type="submit" name="btn-atualizar">Atualizar
                        <i class="material-icons right">update</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
</br>

<?php
// Includes
include_once __DIR__ . '/../assets/footer.php';
include_once __DIR__ . '/../model/Aluno/Aluno.class.php';

if (isset($_POST['btn-atualizar'])):

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

    // Recuperacao de id do aluno a ser editado

    $idEditarAluno = $filter['idAlunoEditar'] = filter_input(INPUT_POST, 'idAlunoEditar', FILTER_SANITIZE_NUMBER_INT);

    // Chamada do método de edicao  

    $alunoController = new AlunoController();
    $result = $alunoController->editarAluno($objAluno, $idEditarAluno);
    echo $result;


// header("location: index.php");
// implementar not null nas variÃ¡veis
// implementar session de para eviar cadastro duplo
// implementar toats de erros

endif;
?>
