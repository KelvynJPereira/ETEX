<?php
/*
 * header
 */
include_once __DIR__ . '/assets/header.php';
?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    include_once __DIR__ . '/view/Login/loginView.view.php';
    ?>

    <div class="col l2">
        <button class="btn waves-effect waves-light green" type="submit" name="btn-logar">Cadastrar
            <i class="material-icons right">add_circle</i>
        </button>
    </div>

</form>

<?php
/*
 * footer
 */



if (isset($_POST['btn-logar'])):



// Sanitização

    $filter = $_POST;

// Dados

    $login = $filter['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $filter['senha'] = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    include_once './controller/LoginController.class.php';
    $logar = new LoginController();
    $result = $logar->logar($login, $senha); // Tratar erro de senha ou usuario cadastrado
    

    switch ($result['tipo_usuario']) {
        case 1:
            session_start();
            $_SESSION['logado'] = 'admin';
            header("Location: ../etex/portal/admin");
            break;
        case 2:
            session_start();
            $_SESSION['logado'] = 'funcionario';
            header("Location: ../etex/portal/funcionario");
            break;
        case 3:
            session_start();
            $_SESSION['logado'] = 'aluno';
            header("Location: ../etex/portal/aluno");
            break;
        default:
            echo "erro";
            break;
    }












endif;
include_once './assets/footer.php';
?>
