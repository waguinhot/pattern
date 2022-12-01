<?php 

require('./classes.php');

$produtos = new Produtos();

$produtos->getLista();

$produtos->setOutput( new JsonOutput());
$data = $produtos->getOutput();

$arrayProdutos = new Produtos();
$arrayProdutos->getLista();
$arrayProdutos->setOutput( new ArrayOutput());
$dataArray = $arrayProdutos->getOutput();

echo "JSON <br>";
print_r($data);

echo "  <br> <br> <br>";

echo "Array <br>";
print_r($dataArray);