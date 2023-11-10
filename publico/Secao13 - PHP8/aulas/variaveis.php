<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Variáveis</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Variáveis</h1>
        <div class="comentario">
            tipagem dinâmica
        </div>
        
        <?php

            // String
            $nome = 'João';
            // inteiro
            $idade = 55;
            // float
            $peso = 80.5;
            // boolean
            $fumante = false; // true = 1; false = vazio
            

            $idade=30;

            $idade='30';
        ?>

        <h2>Ficha Cadastral</h2><hr>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante ?></p>
        
    </body>
</html>