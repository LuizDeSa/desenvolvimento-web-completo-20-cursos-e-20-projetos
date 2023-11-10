<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Loop - While</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Loop - While</h1>
        <div class="comentario"></div>
        <?php
            $x = 1;
            do {
                echo "X = $x <br />";
                $x++; //critério de parada
                //continue
                //break
            } while($x < 10);
        
            // echo '<br />';
        
            // while($x < 9 ) {
            //     echo 'Entrou no while';
            // }
        ?>
    </body>
</html>