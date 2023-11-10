<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Array Funções Nativas</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Array Funções Nativas</h1>
        <div class="comentario"></div>
        <?php          
            
            // $array = 'String';
            $array = ['Banana', 'Maça', 'c'=>'Morango', 'Uva', 'Abacate', 'f'=>'Abacaxi'];
            echo '<pre>';
                print_r($array);
            echo '</pre>';
            echo '<br>';

            // verifica se é array
            $retorno = is_array($array);
            if($retorno){
                echo 'É um array';
            }else{
                echo 'não é um array';
            }

            echo '<br>';
            echo '<hr>';
            echo '<br>';

            // retorna as chaves do array
            $chaves_array = array_keys($array);

            echo '<pre>';
            print_r($chaves_array);
            echo '</pre>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';            
            // true ou false
            sort($array);//Reajusta os indices
            echo '<pre>';
                print_r($array);
            echo '</pre>';
            echo '<br>';

            $array = ['Banana', 'Maça', 'c'=>'Morango', 'Uva', 'Abacate', 'f'=>'Abacaxi'];

             // true ou false
            asort($array);//Preserva os indices
            echo '<pre>';
                print_r($array);
            echo '</pre>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';

            //  Conta os elementos
            echo count($array);
            
            echo '<br>';
            echo '<hr>';
            echo '<br>';

            $array1 = ['Banana', 'Maça', 'Morango'];
            $array2 = ['Uva', 'Abacate', 'Abacaxi'];

            $array = array_merge($array1, $array2);
            echo '<pre>';
                print_r($array);
            echo '</pre>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';

            $string = '01/07/2023';

            $retorno =  explode('/', $string);

            echo '<pre>';
                print_r($retorno);
            echo '</pre>';

            echo '<br>';
            echo '<hr>';
            echo '<br>';

            $string2 = implode('-', $retorno);

            echo $string2;

        ?>
    </body>
</html>