<?php

//imagine que estamos em uma plataforma de ecommerce
// e essa plataforma pode ter varias formas de pagamento
// formas de pagamento flapayment   E spapayment,(pense que seria os gatways de pagamento)

// vamos fingir que temos aqui uma regra incrível pra definir qual a forma de pagamento vai ser usada
// que atualemnte vamos comentar e descomentar xD

//digamos que vamos receber do front a forma de pagamento que o usuário escolheu
// nisso pegamos a Instância do gatway e brincamos com ele
// OBS: ÓBVIO QUE EM UMA SITUAÇÃO REAL EU NÃO VOU INSTÂNCIAR TODOS


// vamos fingir que eu fiz uma lógica absurda pra ver qual vai ser o gatway usado
// 1 = flaypayment
// 2 = spa payment
$instance = rand(1, 2);

echo $instance;

$instacePayment;

if ($instance == 1) {
    require('./payment/methods/flaypayment/flaypaymentFactory.php');
    $instacePayment = new flaypaymentFactory();
}

if ($instance == 2) {
    require('./payment/methods/spapayment/spapaymentFactory.php');
    $instacePayment = new spapaymentFactory();
}



$numpedido = rand(1, 999);

$novoPagamento = $instacePayment->Payment($numpedido, "Beltrano Alves Ciclano", "95,90");

echo "<hr>";
$novoPagamento->pagar();
echo "<hr>";

$novoPagamento->validarPagamento($numpedido);
