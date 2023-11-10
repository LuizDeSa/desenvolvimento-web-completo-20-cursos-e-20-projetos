<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Loop - Pratica 02</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Loop - Pratica 02</h1>
        <div class="comentario"></div>
        <?php
            $funcionarios = array(
                array('nome'=>'João', 'salario'=>2500, 'data_nascimento' => '04/04/1995'),
                array('nome'=>'Julia', 'salario'=>2800),
                array('nome'=>'Maria', 'salario'=>2100),
            
            );

            echo '<pre>';
            print_r($funcionarios);
            echo '</pre>';

            // foreach($funcionarios as $idx => $nome_funcinario){
            //     echo $idx .'=>'. $nome_funcinario.'<br>';
            // }

            foreach($funcionarios as $idx => $funcinario){
                // echo $idx .'=>'. $funcinario.'<br>';
                // print_r($funcinario);
                foreach($funcinario as $idx2 => $valor){
                    echo $idx2 .'=>'. $valor.'<br>';
                }

                echo '<hr>';
            }
        ?>
    </body>
</html>