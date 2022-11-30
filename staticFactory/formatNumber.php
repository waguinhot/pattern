<?php

require 'formatterInterface.php';

class formatNumber implements FormatInterface {
    public function format($param)
    {
        echo "entrou na função de formatação de número ". $param;
    }
}