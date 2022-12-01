<?php 


interface OutputInterface {
    public function load($data);
}

class JsonOutput implements OutputInterface{
    public function load($data)
    {
        return json_encode($data);
    }
}

class ArrayOutput implements OutputInterface {
    public function load($data)
    {
        return $data;
    }
}

class Produtos {

    private $array;
    private $output;

    public function getLista()
    {   
        // imagine que busquei no banco
        $this->array = array(
            array('nome' => 'Fulano'),
            array('nome' => 'Cliclano')
        );


    }

    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function getOutput(){
        return $this->output->load($this->array);
    }
}