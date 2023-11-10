<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estilo.css" rel="stylesheet">
        <link rel="stylesheet" href="../../css/bootstrap5/css/bootstrap.css">
        <link rel="stylesheet" href="../../css/bootstrap5/bootstrap-icons-1.10.5/font/bootstrap-icons.css">
        <title>App Lista Tarefas</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-light px-3">
            <div class="container">
                <a class="navbar-brand mb-0" href="#">
                    <img src="img/logo.png" width="35" alt="" class="d-inline-block align-bottom">
                    App Lista Tarefas
                </a>
            </div>
        </nav>

        <?php if( isset($_GET['inclusao']) && $_GET['inclusao']==1){ ?>
            <div class="bg-success py-2 text-white d-flex justify-content-center">
                <h5>Tarefa inserida com sucesso!</h5>
            </div>
        <?php } ?>

        <div class="container app">
            <div class="row">
                <div class="col-md-3 menu">
                    <ul class="list-group">
						<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
						<li class="list-group-item active"><a href="#">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
                </div>

                <div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
                                <h4>Nova tarefa</h4>
                                <hr />
                                
                                <form method="post" action="tarefa_controller.php?acao=inserir">
									<div class="mb-4">
										<label class="mb-2">Descrição da tarefa:</label>
										<input type="text" class="form-control" placeholder="Exemplo: Lavar o carro" name="tarefa">
									</div>

									<button class="btn btn-success">Cadastrar</button>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
