<?php 

    $acao = 'recuperarTarefasPendentes';

    require 'tarefa_controller.php';

    // echo '<pre>';
    // print_r($tarefas);
    // echo '</pre>';

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estilo.css" rel="stylesheet">
        <link rel="stylesheet" href="../../css/bootstrap5/css/bootstrap.css">
        <link rel="stylesheet" href="../../css/bootstrap5/bootstrap-icons-1.10.5/font/bootstrap-icons.css">

        <title>App Lista Tarefas</title>

        <script>
            function editar(id, txt_tarefa){

                let divCol9 = document.createElement('div')
                divCol9.className = 'col-9'
                
                // criar formulário de edição
                let form = document.createElement('form')
                form.action = 'tarefa_controller.php?acao=atualizarPendente'
                form.method =  'post'
                form.className = 'row'

                let inputTarefa = document.createElement('input')
                inputTarefa.type = 'text'
                inputTarefa.name = 'tarefa'
                inputTarefa.className = 'form-control'
                inputTarefa.value = txt_tarefa

                // Criar um button hidden para guardar o id tarefa
                let inputId = document.createElement('input')
                inputId.type = 'hidden'
                inputId.name = 'id'
                inputId.value = id


                let button = document.createElement('button')
                button.type = 'submit'
                button.className = 'col-3 btn btn-info'
                button.innerHTML = 'Atualizar' 

                divCol9.appendChild(inputTarefa)
                form.appendChild(divCol9)
                form.appendChild(button)
                form.appendChild(inputId)
                console.log(form)
                
                let tarefa = document.getElementById('tarefa_'+id)
                tarefa.innerHTML = ''
                tarefa.insertBefore(form, tarefa[0])
            }


            function remover(id){
                location.href = 'index.php?acao=removerPendente&id='+id;
            }

            function marcarRealizada(id){
                location.href = 'index.php?acao=marcarRealizadaPendente&id='+id;
            }

        </script>
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

        <div class="container app">
            <div class="row">
                <div class="col-md-3 menu">
                    <ul class="list-group">
						<li class="list-group-item active"><a href="#">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
                </div>

                <div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
                                <h4>Tarefas pendentes</h4>
                                <hr />
                                
                                <?php foreach($tarefas as $indice => $tarefa){ ?>
                                    
                                    <div class="row mb-3 d-flex align-items-center tarefa">
                                        <div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
                                            <?= $tarefa->tarefa ?>
                                        </div>
                                        <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                            <i class="bi bi-trash fs-3 text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>
                                            <i class="bi bi-pencil-square fs-3 text-info" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')" ></i>
                                            <i class="bi bi-check-square-fill fs-3 text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
