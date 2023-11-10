<html>
	<head>
		<title>Pilar Encapsulamento</title>
	</head>
	<body>
		<div class="container">
			<h1>Pilar Encapsulamento :: Herança</h1>
			
			<?php
                class Pai {
                    private $nome = 'Luiz';
                    protected $sobrenome = 'Alberto';
                    public $humor = 'Feliz';

                    public function __get($atributo){
                        return $this->$atributo;
                    }

                    public function __set($atributo, $valor){
                        $this->$atributo = $valor;
                    }

                    private function executarMania(){
                        echo 'Assobiar';
                    }

                    protected function responder(){
                        echo 'Oi';
                    }

                    public function executarAcao(){
                        //
                        $x = rand(1,10);
                        if($x%2==0){
                            $this->responder();
                        }else{
                            $this->executarMania();
                        }
                        echo '<br>';
                    }
                }

                class Filho extends Pai{
                    public function __construct(){
                        echo '<pre>';
                        print_r(get_class_methods($this));
                        echo '</pre>';
                    }
                    public function getAtributo($attr){
                        return $this->$attr;
                    }

                    public function setAtributo($attr, $valor){
                        return $this->$attr = $valor;
                    }

                    // Métodos PRIVATE NÃO PODEM ser sobrescrito
                    private function executarMania(){
                        echo 'Sorrir';
                    }

                    // Métodos protected PODEM ser sobrescrito
                    // Nesse caso, o método executarAcao vai intercalar entre o metodo executarMania do PAI, e o método reponder do filho
                    protected function responder(){
                        echo 'Olá';
                    }

                    public function x(){
                        $this->executarMania();
                    }
                    // public function __get($atributo){
                    //     return $this->$atributo;
                    // }

                    // public function __set($atributo, $valor){
                    //     $this->$atributo = $valor;
                    // }
                }

                $pai = new Pai();
                $filho = new Filho();
                echo '<pre>';
                print_r($pai);
                echo '</pre>';
                echo '<pre>';
                print_r($filho);
                echo '</pre>';

                // // Rodar sem o get e set mágicos
                // $filho->setAtributo('humor', 'Triste');
                // echo $filho->getAtributo('humor');
                // echo '<br>';
                // $filho->setAtributo('sobrenome', 'Pereira');
                // echo $filho->getAtributo('sobrenome');
                // echo '<br>';

                // Atributos privados não são herdados
                // Dá Erro
                // echo $filho->getAtributo('nome');
                // echo '<br>';

                // Ele cria a variavél dinamicamente de modo que apresenta erro, mas dá pra recuperar depois
                // $filho->setAtributo('nome', 'Alberto');
                // echo $filho->getAtributo('nome');
                // echo '<pre>';
                // print_r($filho);
                // echo '</pre>';

                // Com métodos get e set mágicos o compostamento é diferente
                
                // Exibindo os métodos da classe filho
                echo '<pre>';
                print_r(get_class_methods($filho));
                echo '</pre>';

                $filho->executarAcao();
                $filho->x();
                // $filho->x();


                // Isso só funciona se estiver os métodos get e set estiverem na classe Pai
                // Caso esteja na classe filha, dá errado.
                // echo $filho->__get('nome');
                // $filho->__set('nome', 'Carlos');
                // echo '<br>';
                // echo $filho->__get('nome');

			?>

		</div>
	</body>
</html>