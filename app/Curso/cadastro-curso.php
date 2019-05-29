<?php
/*
 * Incluir verificaçao de inputs vazios
 * Incluir pop-out de cadastro
 * Incluir verificação de erros do banco
 */
$msgs = [];

session_start();

// Método de cadastro
if (isset($_POST['btn-cadastrar'])):

    // Sanitização
    $filter = $_POST;

    // Dados
    $status = $filter['status'] = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
    $nome = $filter['nome'] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $nivel = $filter['nivel'] = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);
    $objetivo = $filter['objetivo'] = filter_input(INPUT_POST, 'objetivo', FILTER_SANITIZE_STRING);

    // Recupera Coordenador
    $id_coordenador = $filter['coordenador'] = filter_input(INPUT_POST, 'coordenador', FILTER_SANITIZE_STRING);

    // Recupera escola
    $id_escola = $_SESSION['id_escola'];

    // Recupera Disciplina
    $id_disciplina = substr($filter['professorDisciplina'] = filter_input(INPUT_POST, 'professorDisciplina', FILTER_SANITIZE_STRING), 1);

    // Recupera Professor
    $id_professor = substr($filter['professorDisciplina'] = filter_input(INPUT_POST, 'professorDisciplina', FILTER_SANITIZE_STRING), 0, 1);

    // Caso o curso esteja desativado
    if (empty($status)):
        $status = 'Desabilitado';
    endif;

    // Instancia do objeto curso
    include_once __DIR__ . '/../../model/Escola/Curso/Curso.class.php';
    $curso = new Curso($status, $nome, $nivel, $objetivo);

    // Instancia do controller curso
    include_once __DIR__ . '/../../controller/CursoController.class.php';
    $controllerCurso = new CursoController();
    $codigo_curso = $controllerCurso->cadastrarCurso($curso, $id_coordenador, $id_professor, $id_escola);

    array_push($msgs, 'Código do curso: '.$codigo_curso);
   
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
                <a class="waves-effect waves-light btn blue" href="listar-cursos.php"><i class="material-icons left">arrow_back</i>Voltar</a>
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