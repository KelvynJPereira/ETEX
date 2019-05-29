<?php
// Array de erros
$msgs = [];

// session start
session_start();
$id_escola = $_SESSION['id_escola'];


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

    // Profissional
    $ctps = $filter['ctps'] = filter_input(INPUT_POST, 'ctps', FILTER_SANITIZE_STRING);
    $cargo = $filter['cargo'] = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
    $salario = $filter['salario'] = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_STRING);

    //foto
    $foto = null;

    // criacao do objeto
    include_once __DIR__ . '/../../model/Funcionarios/Funcionario.class.php';
    $funcionario = new Funcionario($cargo, $ctps, $salario, $nome, $sobrenome, $nascimento, $sexo, $cor, $cpf, $foneF, $foneP, $email, $numero, $rua, $bairro, $cidade, $estado, $pais, $cep, $foto);

    // Criacao do controller
    include_once __DIR__ . '/../../controller/FuncionarioController.class.php';
    $controllerFuncionarios = new FuncionarioController();
    $resut = $controllerFuncionarios->cadastrarFuncionaro($funcionario, $id_escola);
  
    if ($resut == true):
        array_push($msgs, 'Funcionário cadastrado com sucesso!');
    else:
        array_push($msgs, 'Erro ao cadastrar');
    endif;

endif;

if (!empty($msgs)):
    foreach ($msgs as $msg):
        ?>
        <script>
            window.onload = function () {
                M.toast({html: '<?php echo '<b>' . $msg . '</br>'; ?>', classes: 'orange rounded'});
            };
        </script>
        <?php
    endforeach;
endif;

include_once __DIR__ . '/../../assets/header.php';
?>

<div class = "center"><h3>CADASTRO DE FUNCIONÁRIO</h3></div>
<form method = "POST" enctype = "multipart/form-data" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    <div id="cadastro-funcionario" class="col l10 m10 offset-l1">
        <?php
        include_once __DIR__ . '/../../view/Funcionario/cadastroFuncionario.view.php';
        include_once __DIR__ . '/../../view/Endereco/cadastroEndereco.view.php';
        ?>
    </div>
    <div class="col l12"></br>
        <div class="row">
            <div class="col l3 offset-l3">
                <a class="btn waves-effect waves-light blue" href="../../portal/admin/index.php">Voltar
                    <i class="material-icons left">arrow_back</i>
                </a>
            </div>
            <div class="col l2 offset-l2">
                <button class="btn waves-effect waves-light green" type="submit" name="btn-cadastrar">Cadastrar
                    <i class="material-icons right">add_circle</i>
                </button>
            </div>
        </div>
    </div>
</form>

<?php
include_once __DIR__ . '/../../assets/footer.php';
?>