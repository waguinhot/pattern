<?php 

// não execute, não vai funcionar 
// mas da pra entender a lógica de uma facade
// pega um problemão e simplifica ele
// por exemplo, ele termina toda a finalização de uma compra
// sem precisar ficar instanciando mil metodos na classe principal

class Purchase {
    private $order;
    private $billing;
    private $shipping;


    // amarrado com interfaces "imaginárias" tendo em vista que podem ser adicionadas outras formas
    // desde que respeitando as regras da primeira
    // :D
    
    public function __construct(
        OrderInterface $order,
        BillingInterface $billing,
        ShippingInterface $shipping
    )
    {
        $this->order = $order;
        $this->billing = $billing;
        $this->shipping = $shipping;
    }

    public function finish()
    {   
        // imagine que seria a validação da compra no cartão de crédito
        $this->billing->chargeCreditCard();

        //setando status do pedido da linha anterior
        // onde deve retornar se o pagamento ocorreu corretamente
        $this->order->setStatus($this->billing->getStatus());

        // se ocorreu tudo certo prossiga pra parte de envio
        if($this->order->isOk())
        {
            $this->shipping->addToPipeline($this->order);
        }


    }
}


// digamos que essa seria a chamada da classe pela facade
$purchase = new Purchase($order, $billing, $shipping);
$purchase->finish();