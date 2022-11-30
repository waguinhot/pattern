<?php

require('spapayment.php');

class spapaymentFactory {

    public function Payment($numPedido , $nomeCLiente ,  $valor)
    {
        return new spapayment($numPedido , $nomeCLiente ,  $valor);
    }
}