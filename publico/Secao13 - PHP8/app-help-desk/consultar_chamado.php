<?php
    require_once "validador_acesso.php";
?>

<?php
    $chamados = array();
    $arquivo = fopen("../../PHP8-app-help-desk/arquivo.txt", "r");
    while(!feof($arquivo)){//teste o fim do arquivo
        $registro =  fgets($arquivo);
        
        // Controle de Exibição.
        $registro_detalhes = explode('#', $registro);

        if($_SESSION['perfil_id'] == 2){
            if($_SESSION['id'] != $registro_detalhes[0]){
                continue;
            }else{
                $chamados[] = $registro;
            }
        }else{
            $chamados[] = $registro;
        }
        // echo $registro . '<br>';
    }

    fclose($arquivo);

    // echo '<pre>';
    // print_r($chamados);
    // echo '</pre>';
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>App Help Desk</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
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
                        <div class="card ps-0">
                            <div class="card-header bg-dark text-light fs-5">
                                Consulta de chamado
                            </div>
                            <div class="card-body p-4">
                                <div class="row">
                                    <?php foreach($chamados as $chamado){ ?>
                                        <?php
                                            $chamado_dado = explode('#', $chamado);
                                            
                                            // Controle de Acesso.
                                            // if($_SESSION['perfil_id'] == 2){
                                            //     if($_SESSION['id'] != $chamado_dado[0]){
                                            //         continue;
                                            //     }
                                            // }

                                            if(count($chamado_dado)<4){
                                                continue;
                                            }
                                        ?>
                                        <div class="col-lg-4">
                                            <div class="card pb-5 mb-3 bg-light">
                                                <div class="card-header bg-secondary fs-5 ">
                                                    <?= $chamado_dado[1]?>
                                                </div>
                                                <div class="card-body">
                                                    <!-- <h5 class="card-title"></h5> -->
                                                    <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dado[2]?></h6>
                                                    <p class="card-text"><?= $chamado_dado[3]?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="row mt-5 d-flex justify-content-center">
                                    <a class="btn btn-lg btn-warning w-25" href="home.php">Voltar</a>
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
    
        <script src="../../Bootstrap/bootstrap5/js/bootstrap.bundle.min.js"></script>

    </body>
</html>