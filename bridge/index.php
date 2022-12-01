<?php

interface APIDesenho {
    public function desenharCirculo($x , $y, $radius);
}

class APIDesenho1 implements APIDesenho {
    public function desenharCirculo($x , $y, $radius)
    {
        echo "Desenhando Circulo v1: ".$x." - " . $y ." - " . $radius; 
    }
}

class APIDesenho2 implements APIDesenho {
    public function desenharCirculo($x, $y, $radius)
    {
        echo "Desenhando Circulo v2: " . $x . " - " . $y . " - ".$radius;
    }
}

class APIFdesenhonew implements APIDesenho{
    public function desenharCirculo($x, $y, $radius)
    {
        echo "Desenhando Ciruclo na nova versão ". $x . " - " . $y . " - ".$radius;
    }
}

abstract class Forma {
    protected $api;
    protected $x;
    protected $y;

    public function __construct(APIDesenho $api)
    {
        $this->api = $api;        
    }
}


class Circulo extends Forma {
    protected $radio;

    public function __construct($x, $y, $radius , APIDesenho $api)
    {
        parent::__construct($api);
        $this->x = $x;
        $this->y = $y;
        $this->radio = $radius;
    }

    public function desenhar()
    {
        $this->api->desenharCirculo($this->x , $this->y , $this->radio);
    }
}

$circulo = new Circulo( 1 , 3 , 7 , new APIDesenho2());

$circulo->desenhar();

// usar varios serviços a partir da regra primária de uma interface
// podendo assim implementar varias funções de diferentes formas
// mas nunca desrespeitando a principal regra
// o mais legal é definir na classe abstrata que quem passar por ali
// no caso o serviço que for usado, obrigatóriamente vai ter que 
// utilizar a regra imposta na interface
// ou seja somente serviços que respeitem essa interface vão funcionar nessa parte do sistema
// muito bom pra controllar mas não especificar qual serviço usar