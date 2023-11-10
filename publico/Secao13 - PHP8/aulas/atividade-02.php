<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Atividade-02</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Atividade-02: função inposto de renda</h1>
        <div class="comentario"></div>
        <?php
            function calacularImpostoDeRenda($salario){
                $imposto = 0.0;
                if($salario>=1903.99 && $salario<=2826.65){
                    $imposto = $salario*0.075;
                }else if($salario>=2826.66 && $salario<=3751.05){
                    $imposto = $salario*0.15;
                }else if($salario>=3751.06 && $salario<=4664.68){
                    $imposto = $salario*0.225;
                }else if($salario>=4664.69){
                    $imposto = $salario*0.275;
                }

                return $imposto;
            }


            echo calacularImpostoDeRenda(1903);
            echo '<br>';
            echo  calacularImpostoDeRenda(1905);
            echo '<br>';
            echo  calacularImpostoDeRenda(2827);
            echo '<br>';
            echo  calacularImpostoDeRenda(3500);
            echo '<br>';
            echo  calacularImpostoDeRenda(4300);
            echo '<br>';
            echo  calacularImpostoDeRenda(5000);
        ?>
    </body>
</html>