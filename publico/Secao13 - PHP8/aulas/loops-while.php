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
        
            $num = 1;
            //operadores comparação / lógicos
            echo '-- Início do loop --<br />';

            while ($num <= 10) {
                // echo "$num <br />";
                
                // $num++; //critério de parada.
                if ($num == 2 || $num == 6) {
                    $num++; //critério de parada.
                    continue;
                }

                if($num>10){
                    break;
                }

                echo "$num <br />";

                $num++; //critério de parada.
            }
            echo '-- Fim do loop --';
            
        ?>
    </body>
</html>