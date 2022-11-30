<?php

abstract class Pagamento {
    abstract public function pagar();

    abstract public function validarPagamento($numPedido);

}