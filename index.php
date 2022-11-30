<?php

// EXEMPLO DE simpleFactory
 require('./simpleFactory/Facebook.php');


$fb =  new Facebook();

$post = $fb->createPost();

$post->setAuthor("Fulano");
$post->setMessage("Alguma mensagem bonita pra alegrar seu dia");


echo "Author: ".$post->getAuthor()." <br> Mensagem <p>".$post->getMessage()."</p>";

// FINAL DO EXEMPLO DE simpleFactory

