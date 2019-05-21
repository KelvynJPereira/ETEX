<?php
/*
 * Incluir verificaçao de inputs vazios
 * Incluir pop-out de cadastro
 * Incluir verificação de erros do banco
 */


// Método de cadastro
if (isset($_POST['btn-cadastrar'])):

    var_dump($_POST);
    exit();

    // Sanitização
    $filter = $_POST;

    // Dados
    $staus = $filter['status'] = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
    $nome = $filter['nome'] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $nivel = $filter['nivel'] = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);
    $objetivo = $filter['objetivo'] = filter_input(INPUT_POST, 'objetivo', FILTER_SANITIZE_STRING);
    $professor = $filter['professor'] = filter_input(INPUT_POST, 'professor', FILTER_SANITIZE_STRING);
    $coordenador = $filter['coordenador'] = filter_input(INPUT_POST, 'coordenador', FILTER_SANITIZE_STRING);


    // Instancia do objeto curso
    include_once __DIR__ . '/../../model/Escola/Curso/Curso.class.php';
    $curso = new Curso($status, $nome, $nivel, $objetivo);
    
    





endif;







// Includes
include_once __DIR__ . '/../../assets/header.php';
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    include_once __DIR__ . '/../../view/Curso/cadastrarCurso.view.php';
    ?>
    <div class="row"
         <div id="buttons" class=""></br>
            </br><div class="col l2 offset-l3">
                <a class="waves-effect waves-light btn blue" href="listar-escolas.php"><i class="material-icons left">arrow_back</i>Voltar</a>
            </div>
            <div class="col l3 offset-l3">
                <button class="btn waves-effect waves-light green" type="submit" name="btn-cadastrar">Cadastrar
                    <i class="material-icons right">add_circle</i>
                </button>
            </div>
        </div>
    </div>
</form>



<?php
// Includes
include_once __DIR__ . '/../../assets/footer.php';
?>