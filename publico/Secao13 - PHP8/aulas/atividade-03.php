<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Atividade-03</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Atividade-03</h1>
        <div class="comentario"></div>
        <?php
            $quantidade_numeros = 6;
            $array_resultado = [];
            while(count($array_resultado)<$quantidade_numeros){
                $num_sorteado = rand(1,60);
                if(!in_array($num_sorteado, $array_resultado)){
                    $array_resultado[] = $num_sorteado;
                }
            }

            sort($array_resultado);

            echo '<pre>';
            print_r($array_resultado);
            echo '<pre/>';
        ?>
    </body>
</html>