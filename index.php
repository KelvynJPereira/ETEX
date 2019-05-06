<?php
  

if (isset($_POST['btn-logar'])):

    $filter = $_POST;

    $login = $filter['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = $filter['senha'] = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    include_once __DIR__.'/controller/LoginController.class.php';
    $logar = new LoginController();
    $result = $logar->logar($login, $senha);

    // Redireciona usuario 
   
    switch ($result):
        case $result['permissao_usuario'] == 1;
            echo "Admin";
            $usuario = $result['cpf_usuario'];
            $_SESSION['user'] = $usuario;
            header("Location: portal/admin/index.php");
            break;
        case $result['permissao_usuario'] == 2;
            echo "Funcionario";
            break;
        case $result['permissao_usuario'] == 3;
            echo "Aluno";
            break;
        default;
            echo "Não encontrado";
            break;
    endswitch;




endif;

if (isset($_POST['btn-cadastrar'])):


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
                <a class="brand-logo">LOGO</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Inicío</a></li>
                    <li><a href="#">Gestão Escolar</a></li>
                    <li><a id="login" class="modal-trigger" href="#model-logar">Login</a></li>
                    <li><a id="cadastro" class="modal-trigger" href="#model-cadastro">Cadastre-se</a></li>
                </ul>
            </div>
        </nav>


        <!-- Formulários de login e cadastro --> 

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
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
                        <img src="assets/img/class.png">
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





include_once __DIR__.'/assets/footer.php';
?>

