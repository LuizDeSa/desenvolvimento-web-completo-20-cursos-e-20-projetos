<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Concatenação</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Concatenação</h1>
        <div class="comentario">
            
        </div>
        
        <?php
            $nome = 'Maria';
            $cor = 'verde';
            $idade = 26;
            $atividade_preferida = 'andar de bicicleta';

            echo 'Olá '. $nome .', vi que sua cor preferida é '. $cor .', que você tem '. $idade .' anos e que gosta de' . $atividade_preferida;

            echo '<br>';

            //aspas duplas - é mais pesada 
            echo "Olá $nome, vi que sua cor preferida é $cor, que você tem $idade anos e que gosta de $atividade_preferida";
            
        ?>
        
    </body>
</html>