<?php
// Interfaces são utilizadas para definir o métodos obrigatótios pelas classes que as implementam

    interface EquipamentoEletronicoInterface{
        public function ligar();

        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface{
        public function abrirPorta(){
            echo 'Abrir Porta';
        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }
    }

    class Tv implements EquipamentoEletronicoInterface{
        public function trocarCanais(){
            echo 'Trocar Canais';
        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }
    }

    $x = new Geladeira();
    $x->abrirPorta();
    echo '<br>';
    $x->ligar();
    echo '<br>';
    $x->desligar();
    echo '<hr>';
    $y = new Tv();

    $y->trocarCanais();
    echo '<br>';
    $y->ligar();
    echo '<br>';
    $y->desligar();

    echo '<br>';
    echo '<hr>';
    echo '<hr>';
    echo '<br>';

    // ########**********************############

    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface{
        public function andar();
    }

    interface AquaticoInterface{
        public function nadar();
    }


    class Humano implements MamiferoInterface, TerrestreInterface{
        public function conversar(){
            echo 'Conversar';
        }

        public function respirar(){
            echo 'Respirar';
        }

        public function andar(){
            echo 'Andar';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function esguichar(){
            echo 'Esguichar';
        }

        public function respirar(){
            echo 'Respirar';
        }

        public function nadar(){
            echo 'Nadar';
        }
    }

    $h = new Humano();
    $h->conversar();
    echo '<br>';
    $h->respirar();
    echo '<br>';
    $h->andar();
    echo '<br>';

    echo '<hr>';
    $b = new Baleia();
    $b->esguichar();
    echo '<br>';
    $b->respirar();
    echo '<br>';
    $b->nadar();
    echo '<br>';


    echo '<br>';
    echo '<hr>';
    echo '<hr>';
    echo '<br>';

    interface AnimalInterface{
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papaguaio implements AveInterface{
        public function comer(){
            echo 'Comer';
        }
        public function voar(){
            echo 'Voar';

        }
    }

    $p = new Papaguaio();

    $p->comer();
    echo '<br>';
    echo '<br>';
    $p->voar();
?>