<?php

interface RenderableInterface {
    public function render();
}

class Form implements RenderableInterface {
    private $elements;

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;

        
    }

    public function render(){
        $html = '<form>';

        foreach($this->elements as $element)
        {
            $html .= $element->render();
        }

        $html .= '</form>';

        return $html;
    }
}

class Label implements RenderableInterface{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function render(){
        return '<label style="display:block;"> '.$this->text.' </label>';
    }
}

class InputText implements RenderableInterface {
    private $name;
    private $type;

    public function __construct($name , $type = "text")
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function render()
    {
        return '<input style="display:block;" type="'.$this->type.'" name="'.$this->name.'" /> <br/>';
    }
}

class SubmitButton implements RenderableInterface{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function render()
    {
        return ' <input type="submit"  style="display:block;" value="'.$this->text.'" />';
    }
}