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

                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="" width="30">
                        App Help Desk
                    </a>
                    
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Quem Somos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <section>
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        
                        <div class="card">
                            <div class="card-header bg-dark text-light fs-5">
                                Login
                            </div>
                            <div class="card-body p-4">
                                <form action="valida_login.php" method="post">
                                    <input class="form-control form-control-lg mb-4" type="email" name="email" id="" placeholder='E-mail'>
                                    <input class="form-control form-control-lg mb-4" type="password" name="senha" id="" placeholder='Senha'>

                                    <?php if(isset($_GET['login']) && $_GET['login']=='erro'){ ?>

                                        <div class="alert alert-danger" role="alert">
                                            Usuário ou senha inválido(s)
                                        </div>

                                    <?php } ?>

                                    <?php if(isset($_GET['login']) && $_GET['login']=='erro2'){ ?>

                                        <div class="alert alert-danger" role="alert">
                                            Para acessar o sistema é necessário fazer login.
                                        </div>

                                    <?php } ?>

                                    <input class="btn bg-info btn-lg w-100" type="submit" value="Entrar">
                                </form>
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