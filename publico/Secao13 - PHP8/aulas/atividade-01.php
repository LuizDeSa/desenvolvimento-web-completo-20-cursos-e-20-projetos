<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Atividade-01</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Atividade-01</h1>
        <div class="comentario"></div>
        <?php
            $nome = 'João';
            $peso = 50;
            $idade = 70;
            $pode_doar_sangue = $peso>=50&&$idade>=16 && $idade<=69? true:false;

            if($pode_doar_sangue){
                echo  "$nome, $idade anos, $peso kg atende aos requisitos";
            }else{
                echo  "$nome, $idade anos, $peso kg NÃO atende aos requisitos";
            }
        ?>
    </body>
</html>