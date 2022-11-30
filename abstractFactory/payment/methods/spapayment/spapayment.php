<?php

require 'payment/abstractPayment.php';

class spapayment extends Pagamento {

private $numPedido;
private $nomeCliente;
private $valor;

public function __construct($numPedido , $nomeCliente , $valor)
{
    $this->numPedido = $numPedido;
    $this->nomeCliente = $nomeCliente;
    $this->valor = $valor;
}

public function pagar()
{   
    echo " GATWAY SPA PAYMENT:  pedido número ".$this->numPedido.", no valor " . $this->valor. " ,  para o cliente " . $this->nomeCliente; 
}

public function validarPagamento($numPedido)
{
   

    if($numPedido % 2 != 0) 
    {
        echo "GATWAY SPA PAYMENT : Atesto que esse pedido não foi pago";
        exit;
    }

    echo "GATWAY SPA PAYMENT: pedido foi pago com sucesso, com o ! eba";

}

}