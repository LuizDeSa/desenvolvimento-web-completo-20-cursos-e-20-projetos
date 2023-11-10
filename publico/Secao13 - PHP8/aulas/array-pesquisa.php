<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Array Pesquisa</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Array Pesquisa</h1>
        <div class="comentario"></div>
        <?php

            $lista_frutas =['Banana', 'Maça', 'Morango', 'Uva', 'Abacate', 'Abacaxi'];
            echo '<pre>';
                print_r($lista_frutas);
            echo '</pre>';
           
            // retorna true(1) ou false(vazio)
            $existe = in_array('Pera', $lista_frutas);

            if($existe){
                echo 'Sim, o valor pesquisa';
            }else{
                echo 'O Valor da pesquisa não existe';
            }

            echo '<br>';
            echo '<hr>';
            echo '<br>';


            // retorna o indice do item no array; se não existe, retona null
            $existe =  array_search('Uva', $lista_frutas);
            if($existe!=null){
                echo 'Sim, o valor pesquisa';
            }else{
                echo 'O Valor da pesquisa não existe';
            }

            // Multidimensionais
            $lista_coisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['João',  'Maria']
            ];

            echo '<pre>';
                print_r($lista_coisas);
            echo '</pre>';

            $existe = in_array('Uva', $lista_coisas['frutas']);

            if($existe){
                echo 'Sim, o valor pesquisa';
            }else{
                echo 'O Valor da pesquisa não existe';
            }

        ?>
    </body>
</html>