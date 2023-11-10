<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>If - Else</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>If - Else</h1>
        <div class="comentario">
            
        </div>
        
        <?php
            $possui_cartao_loja = true;
            $valor_da_compra = 99;
            $valor_frete = 50;
            $recebeu_desconto_frete = false;

            if($possui_cartao_loja && $valor_da_compra>=400){
                $valor_frete = 0;
                $recebeu_desconto_frete = true;
            }else if($possui_cartao_loja && $valor_da_compra>=250){
                $valor_frete = 20;
                $recebeu_desconto_frete = true;
            }else if($possui_cartao_loja && $valor_da_compra>=100){
                $valor_frete = 30;
                $recebeu_desconto_frete = true;
            }
        ?>

        <h2>Detalhes do pedido</h2>
        <p>Possui cartão da loja? 
            <?php 
                if($possui_cartao_loja){
                    echo 'SIM';
                }else{
                    echo 'NÃO';
                }
            ?>
        </p>

        <p>Valor da Compra: <?= $valor_da_compra?> R$</p>

        <p>Recebeu desconto no frete? 
            <?php 
                if($recebeu_desconto_frete){
                    echo 'SIM';
                }else{
                    echo 'NÃO';
                }
            ?>
        </p>

        <p>Valor do frete: <?= $valor_frete?> R$</p>

        
    </body>
</html>