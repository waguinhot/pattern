<?php

// require './BuilderInterface.php';


class LuigeBuilder implements BuilderInterface {
    private $character;

    public function createCharacter(){
        $this->character = new Character();
    }

    public function addHelmet(){
        $this->character->setProperty("helmet" , "green");
    }

    public function addWeapon(){
        $this->character->setProperty("lefthang" , "cloves");
        $this->character->setProperty("righthand" , "cloves");
    }

    public function addBoots(){
        $this->character->setProperty("leftfoot" , "white boot");
        $this->character->setProperty("rightfoot" , "white boot");

    }

    public function getCharacter(){
        return $this->character;
    }
}