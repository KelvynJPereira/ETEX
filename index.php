<?php
$msgs = [];

// Limpeza de session
session_start();
session_unset();
session_destroy();


// Solicitacao de login
if (isset($_POST['btn-logar'])):

    // Variavel de mensagens ou erros
    $msgs = [];

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
                    array_push($msgs, 'Erro ao realizar login'); // <- redirecionar para tela 404 not found
                    break;
            endswitch;

        else:
            array_push($msgs, 'Usuário não encontrado');
        endif;

    else:
        array_push($msgs, 'Existem campos vazios');
    endif;
endif;


// Cadastrar admin
if (isset($_POST['btn-cadastrar'])):

    // Sanitizacao
    $filter = $_POST;

    // Associacao de dados recebidos com variaveis
    $nome = $filter['nome'] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = $filter['cpf'] = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
    $email = $filter['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $filter['senha'] = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $nomeEscola = $filter['nome-escola'] = filter_input(INPUT_POST, 'nome-escola', FILTER_SANITIZE_STRING);
    $cnpjEscola = $filter['cnpj'] = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_NUMBER_INT);


    // Includes de objetos
    include_once __DIR__ . '/model/Admin/Admin.class.php';
    include_once __DIR__ . '/model/Usuario/Usuario.class.php';
    include_once __DIR__ . '/model/Escola/Escola.class.php';


    // Criacao de objetos
    $admin = new Admin($nome, null, null, null, $cpf, null, null, null, null, null, null, null, null, null, null, null, null);
    $usuario = new Usuario($email, $senha, $cpf, 1);
    $escola = new Escola($nomeEscola, $cnpjEscola, null, null, null, null, null, null, null, null, null, null, null, null, null);

    // Include de controller
    include_once __DIR__ . '/controller/AdminController.class.php';

    // Criacao do objeto controller
    $adminController = new AdminController();

    // Cadastro de dados
    $dados = $adminController->cadastrarAdmin($admin, $usuario, $escola);

    // Verifica se consulta retornou erros
    if (count($dados) == 1):
        array_push($msgs, $dados);
    else:
        // Associcao do admin a escola
        $adminController->cadastrarAdminEscola($dados['id_admin'], $dados['id_escola']);
        array_push($msgs, 'Cadastrado com sucesso!');
        
        // Pagamentos escola
        include_once __DIR__.'/controller/EscolaController.class.php';
        $controllerEscola = new EscolaController();
        $controllerEscola->cadastrarEscolaMatriculados($dados['id_escola']);
        
    endif;
endif;

// Exibicao de mensagens no toast
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
                <a href="index.php" class="brand-logo animated fadeInLeft"><img src="assets/img/designer/logo.png"</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Inicío</a></li>
                    <li><a href="#cards">Gestão Escolar</a></li>
                    <li><a id="login" class="modal-trigger" href="#model-logar">Login</a></li>
                    <li><a id="cadastro" class="modal-trigger" href="#model-cadastro">Cadastre-se</a></li>
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
            <img class="responsive-img" src="assets/img/designer/background.png"></img>
        </div>

        <div id="ad">
            <div class="card-title center">
                <span>QUEM SOMOS?</span>
            </div>
            <div class="card-content center-align"></br>
                Nosso sistema de gerênciamento escolar foi desenvolvida por alunos, para os alunos, 
                conforme as necessidades identificadas nas atividades pedagogicas e escolares do dia-a-dia.
                .
                </p>

            </div>
        </div>

        <div id="cards" class="row contatiner-2 animated fadeInDown slow">
            </br><div class="col l11 offset-l1">
                <div class="card col l3">
                    <div class="card-image">
                        <img src="assets/img/designer/estudent.png">
                    </div>
                    <div class="card-title center">
                        <span>Gestão de Ensino</span>
                    </div>
                    <div class="card-content">
                        <p>Gerencie facilmente atividades pedagógicas, administrativas e financeiras da sua instiuição.
                            Conduza sua instituição em tempo real, em qualquer lugar.</p>
                    </div>
                </div>

                <div class="card col l3 offset-l1">
                    <div class="card-image">
                        <img src="assets/img/designer/class-1.png">
                    </div>
                    <div class="card-title center">
                        <span>Controle de Colaboradores</span>
                    </div>
                    <div class="card-content">
                        <p>Administre, sem burocracia todos os colaboradores de sua instituição, tendo acesso a detalhes
                            e informações de forma simplificada.</p>
                    </div>
                </div>

                <div class="card col l3 offset-l1">
                    <div class="card-image">
                        <img src="assets/img/designer/analize.png">
                    </div>
                    <div class="card-title center">
                        <span>Análise de Resultados</span>
                    </div>
                    <div class="card-content">
                        <p>Consulte dados, gere relatórios, verifique índices, e visualize dados de produtividade
                            através de gráficos com os principais componentes administrativos.</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-container">

            <div class="parallax"><img src="assets/img/designer/school.png"></div>


        </div>


        <!--JavaScript at end of body for optimized loading-->

        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>


<?php
include_once __DIR__ . '/assets/footer.php';
?>

