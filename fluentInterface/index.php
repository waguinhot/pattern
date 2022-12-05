<?php 

class Person {
    private $name;
    private $lastname;
    private $age;

    public function setName($n)
    {
        $this->name = $n;
        return $this;
    }

    public function setLastname($n)
    {
        $this->lastname = $n;
        return $this;
    }

    public function setAge($n)
    {
        $this->age = $n;
        return $this;
    }

    public function getFullNameYear()
    {
        return $this->name . "  " . $this->lastname . " : " . $this->age . " years";
    }
}

$person = new Person();
$person->setName('wagner')->setLastname('tavares')->setAge(23);

echo $person->getFullNameYear();