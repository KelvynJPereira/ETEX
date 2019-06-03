<?php
// Array de erros
$msgs = [];

session_start();

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

    // Verifica se o CPF esta vazio
    if (empty($cpf)):
        array_push($msgs, 'CPF vazio!');
    else:
        // foto
        $foto = null;

        // Upload de imagem
        // Recuperacao da imagem
        $img = $_FILES['foto'];

        if ($img['error']):
            $sexo != 'Homem' ? $foto = 'girl.png' : $foto = 'man.png';
        endif;

        // Diretorio de uploads
        $dir_uploads = "../../assets/img/alunos/uploads";

        // Caso a pasta nao exista sera criada
        if (!is_dir($dir_uploads)):
            mkdir($dir_uploads);
        endif;

        if (move_uploaded_file($img['tmp_name'], $dir_uploads . DIRECTORY_SEPARATOR . $img['name'])):
            $foto = $img['name'];
        else:
            array_push($msgs, 'Imagem NÃO carregada!');
        endif;
        
        // Recupera id da escola
        $id_escola = $_SESSION['id_escola'];

        // Criação do objeto
        include_once __DIR__ . '/../../model/Aluno/Aluno.class.php';
        $aluno = new Aluno($nome, $sobrenome, $nascimento, $sexo, $cpf, $cor, $foneF, $foneP, $email, $numero, $rua, $bairro, $cidade, $estado, $pais, $cep, $foto);

        // Chamada do método de cadastro
        include_once __DIR__ . '/../../controller/AlunoController.class.php';
        $alunoController = new AlunoController();
        $result = $alunoController->cadastrarAluno($aluno, $id_escola);
        array_push($msgs, $result);
        
        
        
        
        
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
// Exibicao de mensagens no toast
?>

<div class="center"><h3>CADASTRO DE ALUNO</h3></div>
<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="row">
        <div id="cadastro-aluno" class="col l10 m10 offset-l1">
            <?php
            include_once __DIR__ . '/../../view/Aluno/cadastroAluno.view.php';
            include_once __DIR__ . '/../../view/Endereco/cadastroEndereco.view.php';
            ?>
            <div id="buttonsCadastrar" class="col l12"></br>
                <div class="col l6 offset-l2">
                    <a class="btn waves-effect waves-light blue" href="listar-alunos.php">Voltar
                        <i class="material-icons left">arrow_back</i>
                    </a>
                </div>
                <div class="col l2">
                    <button class="btn waves-effect waves-light green" type="submit" name="btn-cadastrar">Cadastrar
                        <i class="material-icons right">add_circle</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
</br>
<?php
// Includes
include_once __DIR__ . '/../../assets/footer.php';
?>
