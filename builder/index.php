<?php

// normalmente utilizado para objetos muito grandes
// como o proprio nome diz ele é um construtor de algo.... builder

require('BuilderInterface.php');
require './Character.php';
require('Director.php');

require('LuigeBuilder.php');
require('MarioBuilder.php');

    
    $mario = (new Director())->build(new MarioBuilder);



   
    $luige = (new Director())->build(new LuigeBuilder);



    echo "Mario: ";
print_r($mario->getAllProperties());

echo "<br> <br> <br>  Luige:  ";

print_r($luige->getAllProperties());