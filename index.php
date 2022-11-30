<?php

// EXEMPLO DE simpleFactory
 require('./simpleFactory/Facebook.php');


$fb =  new Facebook();

$post = $fb->createPost();

$post->setAuthor("Fulano");
$post->setMessage("Alguma mensagem bonita pra alegrar seu dia");


echo "Author: ".$post->getAuthor()." <br> Mensagem <p>".$post->getMessage()."</p>";

// FINAL DO EXEMPLO DE simpleFactory

// PARA USAR O ABSTRACT FACTORY CONSIDERE ENTRAR NA PASTA abstractFactory
// provavelmente vai ser algo parecido http://localhost/pattern/abstractFactory
