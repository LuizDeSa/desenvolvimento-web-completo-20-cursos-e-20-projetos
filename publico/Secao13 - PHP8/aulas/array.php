<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Array</h1>
        <div class="comentario"></div>
        <?php

            // Array Sequencial (indice)         
            // $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva', 'Abacate');
            $lista_frutas =['Banana', 'Maça', 'Morango', 'Uva', 'Abacate'];
            $lista_frutas[] = 'Abaaxi';
            // Funnçoes utilizadas para testes
            echo '<pre>';//formata o array
                var_dump($lista_frutas);
            echo '</pre>';
            echo '<hr>';
            echo '<pre>';
                print_r($lista_frutas);
            echo '</pre>';
            echo $lista_frutas;
            echo '<br>';
            echo $lista_frutas[2];
            
            echo '<hr>';
            // Array associativo
            $lista_frutas = array('a'=>'Banana', 'Maça', 'c'=>'Morango', 'Uva', 'Abacate');
            $lista_frutas['w'] = 'Abacaxi';
            echo '<pre>';
                print_r($lista_frutas);
            echo '</pre>';
            echo $lista_frutas['w'];
            
            
        ?>
    </body>
</html>