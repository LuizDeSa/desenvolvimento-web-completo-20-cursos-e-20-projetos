<html>
	<head>
		<title>Pilar Herança</title>
	</head>
	<body>
		<div class="container">
			<h1>Pilar Herança</h1>
			
			<?php
                class Veiculo{
                    public $placa = null;
                    public $cor = null;

                    function acelerar(){
                        echo 'O veiculo está acelerando';
                    }

                    function freiar(){
                        echo 'O veiculo está freiando';
                    }
                }

                class Carro extends Veiculo{
                    public $teto_solar = false;

                    function __construct($placa, $cor){
                        $this->placa = $placa;
                        $this->cor = $cor;
                    }

                    function abrirTetoSolar(){
                        echo 'Teto solar aberto';
                    }

                    function alterarPosicaoVolante(){
                        echo 'Alterando posição do volante';
                    }
                }

                class Moto extends Veiculo{
                    public $contra_peso_guidao = null;
                    function __construct($placa, $cor){
                        $this->placa = $placa;
                        $this->cor = $cor;
                    }

                    function empinar(){
                        echo 'A moto está empinanado';
                    }
                }

                // $carro1 = new Carro('MCA7D23', 'Branco', false);
                $carro1 = new Carro('MZA9D56', 'Branco');
                $moto1 = new Moto('ABC1B34', 'Azul');
                echo '<pre>';
                print_r($carro1);
                echo '<br><br>';
                print_r($moto1);
                echo '</pre>';
                echo '<hr>';
                $carro1->abrirTetoSolar();
                echo '<br>';
                $carro1->acelerar();
                echo '<br>';
                $carro1->freiar();
                echo '<br>';
        
                echo '<hr>';
                $moto1->empinar();
                echo '<br>';
                $moto1->acelerar();
                echo '<br>';
                $moto1->freiar();


			?>

		</div>
	</body>
</html>