<?php

class Docent extends Person
{
    private $vak;

    function __construct(string $naam, int $leeftijd, string $vak)
    {
        parent::__construct($naam, $leeftijd, "M");
        $this->vak=$vak;
    }

    public function getInfo():string{
        return $this->naam."geeft".$this->vak."<br>";
    }
}