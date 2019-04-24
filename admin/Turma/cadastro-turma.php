<?php


include_once __DIR__.'/../../assets/header.php';
include_once __DIR__.'/../../controller/EscolaController.class.php';

?>




<div class="row">
<?php
$listar = new EscolaController();
$listarEscolas = $listar->listarEscolas();

// continuar daqui select com escolas

include_once __DIR__.'/../../view/Turma/cadastroTuma.view.php';

?>
</div>






<?php

include_once __DIR__.'/../../assets/footer.php';


?>

