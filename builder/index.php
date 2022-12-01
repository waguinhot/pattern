<?php

// normalmente utilizado para objetos muito grandes
// como o proprio nome diz ele é um construtor de algo.... builder

//infelizmente se eu chamar a interface em dois arquivos diferentes e juntar eles aqui
// não vai rolar, então vamos de medida provisória

require('Director.php');

$rand = rand(1,2);

// 1 = Mario

// 2 = Luige

$perso;

if($rand == 1)
{
    require('MarioBuilder.php');
    $perso = (new Director())->build(new MarioBuilder);
}

if($rand == 2)
{
    require('LuigeBuilder.php');
    $perso = (new Director())->build(new LuigeBuilder);
}


print_r($perso->getAllProperties());