<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Native style.css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Animate css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <nav id="menu-inicial">
            <div class="nav-wrapper">
                <a class="brand-logo"</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Inicío</a></li>
                    <li><a href="#">Gestão Escolar</a></li>
                    <li><a id="login" class="modal-trigger" href="#model-logar">Login</a></li>
                    <li><a id="cadastro" class="modal-trigger" href="#model-cadastro">Cadastre-se</a></li>
                </ul>
            </div>
        </nav>


        <div class="parallax-container container-1">

            <img src="assets/img/img.png"></img>

        </div>

        <div class="animated infinite pulse" id="ad">
            <div class="card-title center">
                <span>Personalizado</span>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>
  
        <div class="row contatiner-2">
            </br><div class="col l11 offset-l1">
                <div class="card col l3">
                    <div class="card-image">
                        <img src="assets/img/estudent.png">
                    </div>
                    <div class="card-title center">
                        <span>Gestão de Ensino</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>

                <div class="card col l3 offset-l1">
                    <div class="card-image">
                        <img src="assets/img/class.png">
                    </div>
                    <div class="card-title center">
                        <span>Controle de Funcionários</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>

                <div class="card col l3 offset-l1">
                    <div class="card-image">
                        <img src="assets/img/analize.png">
                    </div>
                    <div class="card-title center">
                        <span>Análise de Resultados</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>














        <div class="parallax-container">
            <div class="parallax"><img src="assets/img/school.png"></div>
        </div>













        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>


<?php
include_once './view/Login/login.view.php';
include_once './view/Cadastro/cadastro.view.php';
include_once './assets/footer.php';
?>


</html>