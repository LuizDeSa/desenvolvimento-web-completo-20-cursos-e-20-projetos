<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Echo -printer</title>
    </head>
    <body>
        <?php
            echo 'Utilizando a tag padrão';
        ?>
        <br>
        <?= 'Utilizando as tags de impressão'; ?>

        <!-- Echo e Print tem a função de entregar é uma janela entre o bloco de programação php e o arquivo html que pe entregue -->
        <?php
            echo '<br>Comando echo<br>';
            
            // É um pouco mais lento que o echo
            // Tem retorno 1 quando consegue imprimir
            echo print('Comando print')
        ?>

    </body>
</html>