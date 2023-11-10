<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Funções</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Funções</h1>
        <div class="comentario">
            
        </div>

        <?php
        
        function exibirBoasVindas(){
            echo 'Seja bem vindo! <br>';
        }

        exibirBoasVindas();


        function calcularAreaTerreno($largura, $comprimento){
            return $largura*$comprimento;
        }

        echo calcularAreaTerreno(20, 50);

        ?>
        
    </body>
</html>