<?php
// Limpeza de session
session_start();
session_unset();
session_destroy();


// Solicitacao de login
if (isset($_POST['btn-logar'])):

    // Variavel de erros
    $erros = [];

    // Sanitizacao
    $filter = $_POST;

    $login = $filter['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = $filter['senha'] = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    // Verifcacao de campos vazios
    if (!empty($login) && !empty($senha)):

        // Consulta de login
        include_once __DIR__ . '/controller/LoginController.class.php';
        $logar = new LoginController();
        $dados = $logar->logar($login, $senha);

        // Verificao de resposta da consulta
        if (!empty($dados)):

            switch ($dados):

                case $dados['permissao_usuario'] == 1;

                    session_start();
                    $_SESSION['logado'] = true;
                    $_SESSION['cpf_admin'] = $dados['cpf_usuario'];
                    header("Location: portal/admin/index.php");
                    break;

                case $dados['permissao_usuario'] == 2;

                    session_start();
                    $_SESSION['cpf_funcionario'] = $dados['cpf_usuario'];
                    header("Location: portal/funcionario/index.php");
                    break;

                case $dados['permissao_usuario'] == 3;

                    session_start();
                    $_SESSION['cpf_aluno'] = $dados['cpf_usuario'];
                    header("Location: portal/aluno/index.php");
                    break;

                default;
                    array_push($erros, 'Erro ao realizar login'); // <- redirecionar para tela 404 not found
                    break;
            endswitch;

        else:
            array_push($erros, 'Usuário não encontrado');
        endif;

    else:
        array_push($erros, 'Existem campos vazios');
    endif;
endif;


/*
  if (isset($_POST['btn-cadastrar'])):

  // Sanitizacao
  $filter = $_POST;

  $nome = $filter['nome'] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
  $cpf = $filter['cpf'] = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
  $email = $filter['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $senha = $filter['senha'] = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
  $nomeEscola = $filter['nome-escola'] = filter_input(INPUT_POST, 'nome-escola', FILTER_SANITIZE_STRING);
  $cnpjEscola = $filter['cnpj'] = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_NUMBER_INT);


  // Cadastrar usuario
  include_once __DIR__ . '/model/Admin/Admin.class.php';
  include_once __DIR__ . '/model/Usuario/Usuario.class.php';
  include_once __DIR__ . '/model/Escola/Escola.class.php';

  $admin = new Admin($nome, null, null, null, $cpf, null, null, null, null, null, null, null, null, null, null, null, null);
  $usuario = new Usuario($email, $senha, $cpf, 1);
  $escola = new Escola($nomeEscola, $cnpjEscola, null, null, null, null, null, null, null, null, null, null, null, null, null);

  include_once __DIR__ . '/controller/AdminController.class.php';

  $adminController = new AdminController();
  $ids = $adminController->cadastrarAdmin($admin, $usuario, $escola);
  endif;

  // Associcao do admin a escola

  $adminController->cadastrarAdminEscola($ids['admin'], $ids['escola']);


  /*
  // Encriptacao

  $options = [
  'cost' => 10
  ];

  $senha = password_hash($senha, PASSWORD_DEFAULT, $options);

  if(password_verify($password, $senhabanco)):
  echo 'true';
  endif;
 */

// Exibicao de erros
if (!empty($erros)):
    foreach ($erros as $erro):
        echo $erro;
    endforeach;
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Native style.css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Animate css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <nav id="menu-inicial">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo animated fadeInLeft"><img src="assets/img/logo.png"</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Inicío</a></li>
                    <li><a href="#">Gestão Escolar</a></li>
                    <li><a id="login" class="modal-trigger" href="#model-logar">Login</a></li>
                    <li><a id="cadastro" class="modal-trigger" href="#model-cadastro">Cadastre</a></li>
                </ul>
            </div>
        </nav>


        <!-- Formulários de login e cadastro --> 

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php
            include_once './view/Login/login.view.php';
            ?>
        </form>    

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php
            include_once './view/Cadastro/cadastro.view.php';
            ?>
        </form>   

        <div class="container-1">
            <img class="responsive-img" src="assets/img/background.png"></img>
        </div>

        <div id="ad">
            <div class="card-title center">
                <span>Personalizado</span>
            </div>
            <div class="card-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam volutpat sit amet ante quis molestie. Integer accumsan mattis sollicitudin. Morbi ultrices consectetur ligula, non lobortis lorem dictum quis.</p>

            </div>
        </div>

        <div class="row contatiner-2 animated fadeInDown slow">
            </br><div class="col l11 offset-l1">
                <div class="card col l3">
                    <div class="card-image">
                        <img src="assets/img/estudent.png">
                    </div>
                    <div class="card-title center">
                        <span>Gestão de Ensino</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>

                <div class="card col l3 offset-l1">
                    <div class="card-image">
                        <img src="assets/img/class-1.png">
                    </div>
                    <div class="card-title center">
                        <span>Controle de Funcionários</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>

                <div class="card col l3 offset-l1">
                    <div class="card-image">
                        <img src="assets/img/analize.png">
                    </div>
                    <div class="card-title center">
                        <span>Análise de Resultados</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-container">

            <div class="parallax"><img src="assets/img/school.png"></div>


        </div>


        <!--JavaScript at end of body for optimized loading-->

        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>


<?php
include_once __DIR__ . '/assets/footer.php';
?>

