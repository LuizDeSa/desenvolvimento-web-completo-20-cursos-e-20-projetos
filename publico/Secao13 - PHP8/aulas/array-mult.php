<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Array Multi</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Array Multi</h1>
        <div class="comentario"></div>
        <?php
            // $lista_coisas = array();
            $lista_coisas = [];

            $lista_coisas['frutas'] = array(1 => 'Banana', 'b' => 'Maçã', '3'=> 'Morango', 4 => 'Uva');
            $lista_coisas['pessoas'] = [1 => 'João', 'José', '3' => 'Maria'];

            $lista_coisas['frutas'][] = 'Morango';
            $lista_coisas['pessoas'][] = 'Luiz';

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';
            echo '<hr/>';
            echo $lista_coisas['frutas'][3];
            echo '<br />';
            echo $lista_coisas['pessoas'][2];       
        ?>
    </body>
</html>