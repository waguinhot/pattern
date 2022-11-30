<?php

require 'formatterInterface.php';

class formatString implements FormatInterface {
    public function format($param)
    {
        echo " entrou na função de formatar string ".$param;
    }
}