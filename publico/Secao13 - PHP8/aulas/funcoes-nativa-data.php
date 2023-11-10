<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Funções Nativas Datas</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Funções Nativas Datas</h1>
        <div class="comentario">
            <p>Referencias:</p>
            <ul>
                <li>
                    https://www.php.net/manual/en/datetime.format.php
                </li>
                <li>
                    https://www.php.net/manual/en/timezones.php
                </li>
            </ul>

            <p>É possivel alterar a o time zone padrão do php no arquivo> /etc/php/8.2/apache2/php.ini, </p>

            <p>Para calcular a diferença entre duas datas é necessario que estas estejam em formato: '2023-06-30'</p>
        </div>
        
        <?php
            //data atual
            echo date('d');
            echo '<br>';
            echo date('D');
            echo '<br>';
            echo date('d/m/Y H:i');
            echo '<br>';
            echo date_default_timezone_get();
            echo '<br>';
            date_default_timezone_set('America/Araguaina');
            echo date('d/m/Y H:i');
            echo '<br>';
            echo date('z');
            echo '<br>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            echo '<br>';

            $data_inicial = '2023-06-30';
            $data_final = '2023-08-20';

            // timestemp
            // 01/01/1970
            // JS -> milissegundos; php -> segundos
            $time_inicial = strtotime($data_inicial);
            $time_final = strtotime($data_final);

            echo $data_inicial . ' - '. $time_inicial;
            echo '<br>';
            echo $data_final . ' - '. $time_final;

            $time_diferenca = abs($time_final-$time_inicial);

            echo '<br>';
            echo $time_diferenca .' segundos';
            echo '<br>';
            echo $time_diferenca/60 .' minutos';
            echo '<br>';
            echo $time_diferenca/60/60 .' horas';
            echo '<br>';
            echo $time_diferenca/60/60/24 .' dias';

        ?>
        
    </body>
</html>