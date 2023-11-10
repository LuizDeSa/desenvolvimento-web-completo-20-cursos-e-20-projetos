<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Operadores ternários</title>
		<link rel="stylesheet" href="../../Bootstrap/css/comentarios.css">
    </head>
    <body>
        <h1>Operadores ternários</h1>
        <div class="comentario">
            
        </div>
        
        <?php
            $possui_cartao_loja = true;
            $valor_da_compra = 100;
            $valor_frete = 50;
            $recebeu_desconto_frete = false;

            // Devemos evitar operadores ternarios em cascata
            $valor_frete_aux = $possui_cartao_loja && $valor_da_compra>=400?0:($possui_cartao_loja && $valor_da_compra>=250? 20:($possui_cartao_loja && $valor_da_compra>=100?30:$valor_frete));
            $recebeu_desconto_frete = $valor_frete_aux!=$valor_frete? true: false;
            $valor_frete = $valor_frete_aux;
        ?>

        <h2>Detalhes do pedido</h2>
        <p>Possui cartão da loja? <?= $possui_cartao_loja ?'SIM':'NÃO';?></p>
        <p>Valor da Compra: <?= $valor_da_compra?> R$</p>

        <p>Recebeu desconto no frete? 
            <?php 
                $teste = $recebeu_desconto_frete ?'SIM':'NÃO';
                echo $teste;
            ?>
        </p>

        <p>Valor do frete: <?= $valor_frete?> R$</p>
        
    </body>
</html>