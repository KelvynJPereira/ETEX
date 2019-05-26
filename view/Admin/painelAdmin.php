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
                <li class="tab"><a class="active" href="#escola">Escola</a></li>
                <li class="tab"><a href="#cursos">Cursos</a></li>
                <li class="tab"><a  href="#alunos">Alunos</a></li>
                <li class="tab "><a href="#funcionarios">Funcionários</a></li>
                <li class="tab"><a href="#usuarios">Usuários</a></li>
            </ul>

            <!-- Escola -->
            <div id="escola" class="col l12"><p>
                <ul class="collapsible col l10 offset-l1 animated fadeInUp">
                    <a href="../../app/escola/cadastro-escola.php"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">add_circle</i>
                                Nova escola
                            </div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <a href="../../app/escola/listar-escolas.php?id=<?php echo $dados_admin['id_admin']; ?>"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">list</i>
                                <?php
                                echo (count($escolas_admin) > 1) ? "Listar Minhas Escolas" : "Listar Minha Escola";
                                ?>
                                <span class="badge"><?php echo count($escolas_admin); ?></span></div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">search</i>
                            Buscar Escola
                        </div>
                        <div class="collapsible-body">
                            <label for="buscar">Informe o CNPJ da instituicao:</label>
                            <form method="POST" action="../../app/escola/buscar-escola.php">
                                <input name="cnpj" id="buscar" type="number"> 
                                <button class="btn waves-effect waves-light btn-small orange" type="submit">Buscar</button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">attach_money</i>
                            Gestão Financeira
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">school</i>
                            Gestão Pedagogica
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>

                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">business</i>
                            Gestão admninistrativa
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>

                </ul>
                </p></div>


            <!-- Cursos  -->

            <div id="cursos" class="col s12"><p>
                <ul class="collapsible col l10 offset-l1 animated fadeInUp">
                    <a href="../../app/curso/cadastro-curso.php"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">add_circle</i>
                                Cadastrar Curso
                            </div>
                        </li></a>
                    <a href="../../app/curso/listar-cursos"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">list</i>
                                Listar Cursos
                            </div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">search</i>
                            Buscar Curso
                        </div>
                        <div class="collapsible-body">
                            <label for="buscar">Informe o código do curso:</label>
                            <form method="POST" action="../../app/curso/buscar-curso.php">
                                <input name="codigo-curso" id="buscar" type="text"> 
                                <button class="btn waves-effect waves-light btn-small orange" type="submit">Buscar</button>
                            </form>
                        </div>
                    </li>
                </ul>
                </p></div>

            <!-- Alunos -->

            <div id="alunos" class="col l12"><p>
                <ul class="collapsible col l10 offset-l1 animated fadeInUp">
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">add</i>
                            Matricular Aluno
                        </div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <a href="../../app/aluno/cadastro-aluno.php"> <li>
                            <div class="collapsible-header">
                                <i class="material-icons">add_circle</i>
                                Novo Aluno
                            </div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <a href="../../app/aluno/listar-alunos.php"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">list</i>
                                Listar Alunos
                                <span class="new badge">54</span>
                            </div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">search</i>
                            Buscar Aluno
                        </div>
                        <div class="collapsible-body">
                            <label for="buscar">Informe o código da matricula:</label>
                            <form method="POST" action="#">
                                <input name="matricula" id="buscar" type="number"> 
                                <button class="btn waves-effect waves-light btn-small orange" type="submit">Buscar</button>
                            </form>
                        </div>
                    </li>
                </ul>
                </p></div>

            <!-- Funcionários -->

            <div id="funcionarios" class="col s12"><p>

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
                        </div>
                        <div class="collapsible-body">
                            <label for="buscar">Informe o código da matricula:</label>
                            <form method="POST" action="#">
                                <input name="matricula-funcionario" id="buscar" type="number"> 
                                <button class="btn waves-effect waves-light btn-small orange" type="submit">Buscar</button>
                            </form>
                        </div>
                    </li>
                </ul>
                </p></div>

            <!-- Usuarios -->
            <div id="usuarios" class="col l12"><p>
                <ul class="collapsible col l10 offset-l1 animated fadeInUp">
                    <a href="#"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">add_circle</i>
                                Nova Usuário
                            </div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <a href="#"><li>
                            <div class="collapsible-header">
                                <i class="material-icons">list</i>
                                Listar Usuários da Escola
                            </div>
                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li></a>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">search</i>
                            Buscar Usuário
                        </div>
                        <div class="collapsible-body">
                            <label for="buscar">Informe o email do úsuario:</label>
                            <form method="POST" action="#">
                                <input name="matricula-funcionario" id="buscar" type="number"> 
                                <button class="btn waves-effect waves-light btn-small orange" type="submit">Buscar</button>
                            </form>
                        </div>
                    </li>

                </ul>
                </p>
            </div>
        </div>
    </div>
</div>















