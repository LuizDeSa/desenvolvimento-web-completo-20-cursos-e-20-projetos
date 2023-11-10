<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Loop - Pratica 01</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Loop - Pratica 01</h1>
        <div class="comentario"></div>
        <?php
            $registros = array(
                array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
                array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
                array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
                array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'),
            );
        
            echo '<pre>';
            print_r($registros);
            echo '</pre>';
            echo '<br /><br /><br />';

            $idx = 0;

            // echo 'Quantidade de itens: '. count($registros);

            // while($idx < count($registros)){
            //     echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            //     echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            //     echo '<hr />';
            //     $idx++;
            // }

            // do{
            //     echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            //     echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            //     echo '<hr />';
            //     $idx++;
            // }while($idx < count($registros));

            for($idx = 0; $idx<count($registros); $idx++){
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                echo '<hr />';
            }
        ?>
    </body>
</html>