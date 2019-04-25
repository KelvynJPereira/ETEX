<?php
/*
 * header
 */
include_once __DIR__.'/assets/header.php';
include_once __DIR__.'/model/Usuario/Usuario.class.php';
include_once __DIR__.'./controller/UsuarioController.class.php';
?>


<?php

/*

Teste escola 
 
include_once './model/Escola/Escola.class.php';

$escola = new Escola();
$escola->setNome("Miguel batista");
$escola->setTipo("pública");
$escola->setTipoEnsino("médio técnico");

echo "A ".$escola->getNome()." é uma escola ".$escola->getTipo().", que oferce o ensino ".$escola->getTipoEnsino()." a pupulação Pernambucana.";

*/

/*
Teste usuario
*/

$user = new Usuario(0, 'admin', 'admin');
$cadastrar = new UsuarioController();
echo $cadastrar->cadastrarUsuario($user);














?>

















<?php
/*
 * footer
 */
include_once './assets/footer.php';
?>
