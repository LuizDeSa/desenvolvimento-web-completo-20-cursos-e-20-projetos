<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Constantes</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Constantes</h1>
        <div class="comentario">
            
        </div>
        
        <?php
            define('BD_URL', 'endereco_bd_dev');        
            define('BD_USUARIO', 'usuario_bd_dev');            

            echo BD_URL;
            echo '<br>';
            echo BD_USUARIO;
        ?>
        
    </body>
</html>