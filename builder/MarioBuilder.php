<?php


class MarioBuilder implements BuilderInterface {
    private $character;

    public function createCharacter(){
        $this->character = new Character();
    }

    public function addHelmet(){
        $this->character->setProperty("helmet" , "red");
    }

    public function addWeapon(){
        $this->character->setProperty("lefthang" , "cloves");
        $this->character->setProperty("righthand" , "cloves");
    }

    public function addBoots(){
        $this->character->setProperty("leftfoot" , "black boot");
        $this->character->setProperty("rightfoot" , "black boot");

    }

    public function getCharacter(){
        return $this->character;
    }
}