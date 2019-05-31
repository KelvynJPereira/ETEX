<?php
$msgs = [];

session_start();

// Recuperacao da escola
$id_escola = $_SESSION['id_escola'];


// Método de cadastro
if (isset($_POST['btn-cadastrar'])):
    
    // Sanitização
    $filter = $_POST;

    // Dados
    $disciplina_nome = $filter['disciplina'] = filter_input(INPUT_POST, 'disciplina', FILTER_SANITIZE_STRING);
    $id_professor = $filter['professor'] = filter_input(INPUT_POST, 'professor', FILTER_SANITIZE_STRING);

    // Criacao do objeto disciplina
    include_once __DIR__ . '/../../model/Escola/Disciplina/Disciplina.class.php';
    $disciplina = new Disciplina($disciplina_nome);

    // Cadastro de disciplina
    include_once __DIR__ . '/../../controller/DisciplinaController.class.php';
    $controllerDisciplina = new DisciplinaController();
    $result = $controllerDisciplina->cadastrarDisciplina($disciplina, $id_professor, $id_escola);

    if ($result):
        array_push($msgs, 'Disciplina cadastrada com sucesso!');
    else:
        array_push($msgs, 'Disciplina NÃO cadastrada!');
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

// Includes
include_once __DIR__ . '/../../assets/header.php';
?>


<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    include_once __DIR__ . '/../../view/Disciplina/cadastrarDisciplina.view.php';
    ?>
    <div class="row"
         <div id="buttons" class=""></br>
            </br><div class="col l2 offset-l3">
                <a class="waves-effect waves-light btn blue" href="../../portal/admin/index.php"><i class="material-icons left">arrow_back</i>Voltar</a>
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
include_once __DIR__ . '/../../assets/footer.php';
?>