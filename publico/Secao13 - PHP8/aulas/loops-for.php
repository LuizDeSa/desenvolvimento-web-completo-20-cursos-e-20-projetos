<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Loop - For</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Loop - For</h1>
        <div class="comentario"></div>
        <?php
            for($x = 1; $x <= 10; $x++){
                echo "$x <br/>";
            }

            echo "<hr>";

            for ($x = 11; true; $x++) {

                if ($x >= 20) {
                    break;
                }
                echo "$x <br/>";
            }

            echo "<hr>";

            for ($x = 10; true; $x--) {

                if ($x == 0) {
                    break;
                }
                echo "$x <br/>";
            }

            echo "<hr>";

            for ($x = 10; $x > 0; $x--) {

                //break
                //continue
                echo "$x <br/>";
            }      
        ?>
    </body>
</html>