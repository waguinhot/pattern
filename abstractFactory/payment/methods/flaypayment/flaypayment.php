<?php

require 'payment/abstractPayment.php';

class flaypayment extends Pagamento {

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
    // imagine que estou pegando os dados, validando e trabalhando com a api do gatway de pagamento e essa dae é a parte final
    echo "  GATWAY FLAYPAYMENT: pedido número ".$this->numPedido.", no valor " . $this->valor. " ,  para o cliente " . $this->nomeCliente; 
}

public function validarPagamento($numPedido)
{
    // pense que estou indo ná api verificar se o pagamento do pedido foi aprovado pra alterar o status
    // talves eu coloque em uma rota e deixe em um crontab rodando, ou eu faça manual na lista de pedidos, não ligo(brincadeira kkkk)

    if($numPedido % 2 != 0) 
    {
        echo "GATWAY SPA PAYMENT : Atesto que esse pedido não foi pago";
        exit;
    }

    echo "GATWAY SPA PAYMENT : pedido foi pago com sucesso! eba";

}

}