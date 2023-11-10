<?php
    require_once "validador_acesso.php";
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>App Help Desk</title>
		<link rel="stylesheet" href="../../css/style-comentarios.css">
		<link rel="stylesheet" href="../../css/bootstrap5/css/bootstrap.css">
    </head>
    <body>
        <header class="mb-5 pb-5">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark px-3">
                <div class="container">
                    <a class="navbar-brand" href="home.php">
                        <img src="img/logo.png" alt="" width="30">
                        App Help Desk
                    </a>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="logoff.php">SAIR</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>

        <section>
            <div class="container">
                <div class="row">
                        <div class="card px-0">
                            <div class="card-header fs-5 bg-dark text-light">
                                Menu
                            </div>
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <a href="abrir_chamado.php">
                                            <img src="img/formulario_abrir_chamado.png" alt="" width="70">
                                        </a>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <a href="consultar_chamado.php">
                                            <img src="img/formulario_consultar_chamado.png" alt="" width="70">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                </div>
            </div>
        </section>

        <footer class="py-2 bg-dark fixed-bottom">
            <div class="container">
                <div class="row text-white">
                    <div class="d-flex justify-content-center fs-6">
                        &copy 2017–2023
                    </div>
                </div>
            </div>
        </footer>
    
        <script src="../../css/bootstrap5/js/bootstrap.bundle.min.js"></script>

    </body>
</html>