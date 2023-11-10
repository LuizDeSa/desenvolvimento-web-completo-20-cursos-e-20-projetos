<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Switch</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Switch</h1>
        <div class="comentario">
            
        </div>
        
        <?php
            $parametro = '2';
            // comparação por igualdade(==) e não por identidade(===)
            switch($parametro){
                case 1:
                    echo 'entrou no case 1';
                    break;
                case 2:
                    echo 'entrou no case 2';
                    // break;
                case 3:
                    echo 'entrou no case 3';
                    break;
                case 'abc':
                    echo 'entrou no case 2';
                    break;
                case false:
                    echo 'entrou no case 2';
                    break;
                default:
                    echo 'entrou no default';
                    break;
            }
        ?>
        
    </body>
</html>