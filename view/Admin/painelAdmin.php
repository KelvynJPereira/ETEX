<div class="row">
    <div class="chip col l1 offset-l10">
        <?php
        echo '<img style="width:50px heigth:50px;" src="data:image/jpeg;base64,' . base64_encode($dados_admin['logo_admin']) . '"/>';
        echo $dados_admin['nome_admin'];
        ?>
    </div>
    <div class="container-1">
        <div class="col l12 m12 center animated bounce delay-1s"></br>
            <?php
            foreach ($escola as $dado):
                echo '<h4><b>Escola ' . $dado['nome_escola'];
                '</b></h4>';
            endforeach;
            ?>
        </div>
    </div>


    <div class="container-2">
        <div class="col l11 m11">
            </br> <div class="col l5 offset-l1 m11 animated fadeInLeft delay-0.9s">
                <?php
                include_once __DIR__ . '/../../assets/graficos/Escola/escola-pgto-receber.php';
                ?>
            </div>

            <div class="col l5 m11 offset-l1 animated fadeInRight delay-0.9s">
                <?php
                include_once __DIR__ . '/../../assets/graficos/Escola/escola-despesas.php';
                ?>
            </div>
        </div>
    </div>

    <div class="container-3">
        <div class="animated fadeIn delay-1s">
            <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                <li class="tab"><a class="active" href="#test1">Escola</a></li>
                <li class="tab"><a  href="#test2">Alunos</a></li>
                <li class="tab "><a href="#test3">Funcionários</a></li>
                <li class="tab"><a href="#test4">Financeiro</a></li>
                <li class="tab"><a href="#test0">Administrativo</a></li>
            </ul>
            <div id="test1" class="col s12"><p>Test 1</p></div>
            <div id="test2" class="col s12"><p>Test 2</p></div>
            <div id="test3" class="col s12"><p>Test 3</p></div>
            <div id="test4" class="col s12"><p>Test 4</p></div>
            <div id="test0" class="col s12"><p>Test 5</p></div>
        </div>
    </div>
</div>
















</div>