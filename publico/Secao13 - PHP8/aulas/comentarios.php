<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Comentários</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Comentários</h1>
        <div class="comentario">
            Os comenário php não aparecem em inspecionar, pois são interpretados do lado do servidor
        </div>
        <!-- Comentario html -->
        <?php

            //Comentario de uma linha
            #comentário de uma linha
            /* 
                Comentario de muitas 
                Linhas
            */
            echo '<br>Comando echo<br>';
            
            // É um pouco mais lento que o echo
            // Tem retorno 1 quando consegue imprimir
            echo print('Comando print')
        ?>

    </body>
</html>