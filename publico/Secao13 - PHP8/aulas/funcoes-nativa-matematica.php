<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Funções Nativas Matemática</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Funções Nativas Matemática</h1>
        <div class="comentario">
            
        </div>
        
        <?php
            $valor = 7.5653;
            // $valor = -7.4653;

            echo($valor);
            echo '<br>';
            echo ceil($valor);//arredonda para cima
            echo '<br>';
            echo floor($valor);//arredonda para baixo
            echo '<br>';
            echo round($valor);//arredondamento dependendo do caso
            echo '<br>';
            echo getrandmax();
            echo '<br>';
            echo rand();// 0 até randMax
            echo '<br>';
            echo rand(10,20);// 0 até randMax
            echo '<br>';
            echo sqrt(36);
        ?>
        
    </body>
</html>