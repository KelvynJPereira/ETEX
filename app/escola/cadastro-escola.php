<?php
/*
 * Incluir verificaçao de inputs vazios
 * Incluir pop-out de cadastro
 * Incluir verificação de erros do banco
 */

// Includes

include_once __DIR__.'/../../assets/header.php';
include_once __DIR__.'/../../model/Escola/Escola.class.php';
include_once __DIR__.'/../../controller/EscolaController.class.php';

?>


<div class="row">
<?php

include_once __DIR__.'/../../view/Escola/cadastroEscola.view.php';
include_once __DIR__.'/../../view/Endereco/cadastroEndereco.view.php';


?>
</div>






<?php

include_once __DIR__.'/../../assets/footer.php';

?>

