<div class="row">
    <!-- Chip de identificacao -->
    <div class="chip col l1 offset-l10 animated zoomIn delay-1s">
        <?php
        if (!empty($dados_admin['logo_admin'])):
            echo '<img style="width:50px heigth:50px;" src="data:image/jpeg;base64,' . base64_encode($dados_admin['logo_admin']) . '"/>';
        endif;
        echo '<b>' . $dados_admin['nome_admin'] . '</br>';
        ?>
    </div>
    <!-- Nome da escola -->
    <div class="container-1 animated zoomIn">
        <div class="col l12 m12 center animated bounce delay-1s">
            <?php
            foreach ($escola as $dado):
                echo '<h4><b>Escola ' . $dado['nome_escola'];
                '</b></h4>';
            endforeach;
            ?>
        </div>
    </div>
    <!-- Gráficos -->
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
    <!-- Slide de opcoes -->
    <div class="container-3">
        <div class="animated fadeInLeft delay-2s">
            <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                <li class="tab"><a class="active" href="#test1">Escola</a></li>
                <li class="tab"><a  href="#test2">Alunos</a></li>
                <li class="tab "><a href="#test3">Funcionários</a></li>
                <li class="tab"><a href="#test4">Financeiro</a></li>
                <li class="tab"><a href="#test0">Administrativo</a></li>
            </ul>





            <div id="test1" class="col l12"><p>

                <ul class="collapsible col l10 offset-l1 animated fadeInUp">
                    <a href="../../app/escola/cadastro-escola.php"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">add_circle</i>
                                Nova escola
                                <span class="new badge">4</span></div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <a href="../../app/escola/listar-escolas.php?id=<?php echo $dados_admin['id_admin'];?>"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">list</i>
                                Listar Escolas
                                <span class="badge">1</span></div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">search</i>
                            Buscar Escola
                            <span class="badge">1</span></div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                </ul>






                </p></div>

            <div id="test2" class="col l12"><p>


                <ul class="collapsible col l10 offset-l1 animated fadeInUp">
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">add</i>
                            Matricular Aluno
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">add_circle</i>
                            Novo Aluno
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">list</i>
                            Listar Alunos
                            <span class="new badge">54</span>
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">search</i>
                            Buscar Aluno
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">edit</i>
                            Editar Aluno
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">delete</i>
                            Excluir Aluno
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                </ul>



                </p></div>
            <div id="test3" class="col s12"><p>





















                <ul class="collapsible col l10 offset-l1 animated fadeInUp">
                    <a href="#"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">add_circle</i>
                                Cadastrar Funcionário
                            </div>
                        </li></a>
                    <a href="#"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">list</i>
                                Listar Funcionários
                            </div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">search</i>
                            Buscar Funcionário
                            <span class="badge">1</span></div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">edit</i>
                            Editar Funcionário
                            <span class="badge">1</span></div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">delete</i>
                            Excluir Funcionário
                            <span class="badge">1</span></div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                </ul>



                </p></div>
            <div id="test4" class="col s12"><p>Test 4</p></div>
            <div id="test0" class="col s12"><p>Test 5</p></div>
        </div>
    </div>
</div>
















</div>