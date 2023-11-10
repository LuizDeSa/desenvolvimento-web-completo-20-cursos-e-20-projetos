<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Funções Nativas String</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Funções Nativas String</h1>
        <div class="comentario">
            
        </div>
        
        <?php
            $texto = 'Curso Completo de PHP';

            echo $texto;
            echo '<br>';
            echo strtolower($texto);
            echo '<br>';
            echo strtoupper($texto);

            echo '<br>';
            echo ucfirst($texto);

            echo '<br>';
            echo strlen($texto);

            echo '<br>';
            echo str_replace('PHP', 'Java Script', $texto);
            echo '<br>';
            echo str_replace('.', ',', '22.25');

            echo '<br>';
            echo substr($texto, 1, 4);
        ?>
        
    </body>
</html>