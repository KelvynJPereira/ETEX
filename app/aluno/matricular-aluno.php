<?php
// Array de erros
$msgs = [];

// Incia sessao
session_start();

// Salva o id do aluno na sessao
if (!empty($_GET['id_aluno'])):
    $_SESSION['id_aluno'] = $_GET['id_aluno'];
endif;
if (empty($id_aluno)):
    $id_aluno = $_SESSION['id_aluno'];
endif;

// Consultar dados de aluno
include_once __DIR__ . '/../../controller/AlunoController.class.php';
$controllerAluno = new AlunoController();
$aluno = $controllerAluno->buscarAluno($id_aluno);

// Listar cursos da escola
include_once __DIR__ . '/../../controller/CursoController.class.php';
$controllerCurso = new CursoController();

// Recupera id da escola
$id_escola = $_SESSION['id_escola'];
$lista_cursos = $controllerCurso->listarCursos($id_escola);

// Validacao de tamanho de array
count($lista_cursos) > 1 ? $cursos = $lista_cursos : $cursos = $lista_cursos;

// Matricular aluno
if (isset($_POST['btn-matricular'])):

    // Recuperacao de do curso
    $id_curso = $_POST['id_curso'];

    include_once __DIR__ . '/../../controller/AlunoController.class.php';
    $controllerAluno = new AlunoController();
    $result = $controllerAluno->matricularAluno($id_aluno, $id_curso, $id_escola);

    array_push($msgs, 'Matricula: ' . $result);

    // Soma no grafico
    include_once __DIR__ . '/../../controller/EscolaController.class.php';
    $controllerEscola = new EscolaController();
    $result1 = $controllerEscola->alunosMatriculados($id_escola);
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

// Include herader
include_once __DIR__ . '/../../assets/header.php';
?>

<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    include_once __DIR__ . '/../../view/Aluno/matricularAluno.view.php';
    ?>
    <div class="row"
         <div id="buttons" class=""></br>
            </br><div class="col l2 offset-l3">
                <a class="waves-effect waves-light btn blue" href="listar-alunos.php"><i class="material-icons left">arrow_back</i>Voltar</a>
            </div>
            <div class="col l3 offset-l3">
                <button class="btn waves-effect waves-light green" type="submit" name="btn-matricular">Matricular
                    <i class="material-icons right">school</i>
                </button>
            </div>
        </div>
    </div>
</form>
<?php
include_once __DIR__ . '/../../assets/footer.php';
?>