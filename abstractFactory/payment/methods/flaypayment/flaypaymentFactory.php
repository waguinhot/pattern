<?php

require('flaypayment.php');

class flaypaymentFactory {

    public function Payment($numPedido , $nomeCLiente ,  $valor)
    {
        return new flaypayment($numPedido , $nomeCLiente ,  $valor);
    }
}