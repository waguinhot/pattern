<?php

class Character {
    private $properties;

    public function setProperty($pname , $pvalue)
    {
        $this->properties[$pname] = $pvalue;
    }

    public function getAllProperties(){
        return $this->properties;
    }
    
}