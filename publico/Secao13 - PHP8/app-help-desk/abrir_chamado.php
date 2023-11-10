<?php
    require_once "validador_acesso.php";
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>App Help Desk</title>
		<link rel="stylesheet" href="../../css/style-comentarios.css">
		<link rel="stylesheet" href="../../css/bootstrap5/css/bootstrap.css">
        <script src="app.js"></script>
    </head>
    <body onload="carregarCategoria()">
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
                    <div class="d-flex justify-content-center">
                        
                        <div class="card w-100">
                            <div class="card-header bg-dark text-light fs-5">
                                Abertura de chamado
                            </div>

                            <div class="card-body p-4">

                                <div class="row">
                                    <div class="col">
                                        <form method="post" action="registra_chamado.php">
                                            <div class="mb-3">
                                                <label for="titulo-chamado" class="form-label">Título</label>
                                                <input type="text" class="form-control" id="titulo-chamado" name="titulo-chamado" placeholder="Título">
                                            </div>

                                            <div class="mb-3">
                                                <label for="categoria-chamado" class="form-label">Categoria</label>
                                                <select class="form-select"  name="categoria-chamado" id="categoria-chamado" name="categoria-chamado">
                                                    <option value="">Categoria</option>
                                                    <!-- <option value="Criação Usuário">Criação Usuário</option>
                                                    <option value="Impressora">Impressora</option> -->
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="descricao-chamado" class="form-label">Descrição</label>
                                                <textarea class="form-control" id="descricao-chamado" name="descricao-chamado" rows="3"></textarea>
                                            </div>

                                            <div class="mt-5 d-flex justify-content-center">
                                                <button class="btn btn-lg btn-info me-4" type="submit">Abrir</button>    
                                                <a class="btn btn-lg btn-warning" href="home.php">Voltar</a>
                                            </div>
                                        </form>
                                    </div>
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