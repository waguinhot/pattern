<?php 
class Director {
    public function build(BuilderInterface $builder)
    {
        $builder->createCharacter();
        $builder->addHelmet();
        $builder->addWeapon();
        $builder->addBoots();
        return $builder->getCharacter();
    }
}