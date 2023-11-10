<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>False Null Empty</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>False Null Empty</h1>
        <div class="comentario"></div>
        <?php

            $funcionario1 = null;
            $funcionario2 = '';
            $funcionario3 = false;

            if(is_null($funcionario1)){
                echo 'É Null';
            }else{
                echo 'NÃO é Null';
            }

            echo '<br>';

            if(is_null($funcionario2)){
                echo 'É Null';
            }else{
                echo 'NÃO é Null';
            }

            echo '<br>';

            if(is_null($funcionario3)){
                echo 'É Null';
            }else{
                echo 'NÃO é Null';
            }

            echo '<br>';
            echo '<hr>';
            echo '<br>';


            if(empty($funcionario1)){
                echo 'É Vazio';
            }else{
                echo 'NÃO é Vazio';
            }
            echo '<br>';
            if(empty($funcionario2)){
                echo 'É Vazio';
            }else{
                echo 'NÃO é Vazio';
            }
            echo '<br>';
            if(empty($funcionario3)){
                echo 'É Vazio';
            }else{
                echo 'NÃO é Vazio';
            }
        ?>
    </body>
</html>