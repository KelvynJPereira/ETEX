<?php
/*
 * Incluir verificaçao de inputs vazios
 * Incluir pop-out de cadastro
 * Incluir verificação de erros do banco
 */

// Include header
include_once __DIR__ . '/../assets/header.php';
include_once __DIR__ . '/../controller/AlunoController.class.php';
?>




<div class="row">
    <ul id="tabs-swipe-demo" class="tabs col l12">
        <li class="tab col l4"><a href="#test-swipe-1">Test 1</a></li>
        <li class="tab col l4"><a class="active" href="#test-swipe-2">Test 2</a></li>
        <li class="tab col l4"><a href="#test-swipe-3">Test 3</a></li>
    </ul>
    <div id="test-swipe-1" class="col s12 blue">Test 1</div>
    <div id="test-swipe-2" class="col s12 red">Test 2</div>
    <div id="test-swipe-3" class="col s12 green">Test 3</div>

</div>
















<?php
/*
 * footer
 */
include_once __DIR__ . '/../assets/footer.php';
?>
