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
            $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

            echo '<pre>';
            print_r($itens);
            echo '</pre>';

            foreach ($itens as $item) {
                echo "$item ";
                if ($item == 'mesa') {
                    echo "(*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)";
        
                }
                echo '<br />';
            }
        ?>
    </body>
</html>