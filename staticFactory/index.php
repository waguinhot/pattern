<?php 

require 'staticFactory.php';

$param = [ 'string' , 'number'];
$num = rand(0,1);

$formatt = StaticFactory::make($param[$num]);

$formatt->format("testando .. .. 12 2 1 1");