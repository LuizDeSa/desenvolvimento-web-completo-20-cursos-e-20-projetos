<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Casting</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Casting</h1>
        <div class="comentario">
            <ul>
                <li>int -> float, string</li>
                <li>string -> int, float, boolean</li>
                <li>float -> int, string</li>
                <li>boolean -> int, string</li>
            </ul>
        </div>
        
        <?php

        // gettype() => retorna o tipo da variavél

        $valor = false;
        // $valor2 = (float) $valor;
        // $valor2 = (double) $valor;
        // $valor2 = (string) $valor;
        $valor2 = (int)$valor;
        // $valor2 = (bool)$valor;

        echo $valor .' '. gettype($valor).'<br>';
        echo $valor2 .' '. gettype($valor2).'<br>';
           
        
        ?>
        
    </body>
</html>