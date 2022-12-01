<?php

interface BuilderInterface {
    public function createCharacter();

    public function addHelmet();

    public function addWeapon();

    public function addBoots();

    public function getCharacter();
}