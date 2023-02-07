<?php

{
    class Person
    {
        public $naam;
        private $leeftijd;
        protected $geslacht;
        public $isStudent;
        public $gemiddeldCijfer;
        // constructor methode
        function __construct(string $naam, int $leeftijd, string $geslacht)
        {
            $this->naam=$naam;
            $this->leeftijd=$leeftijd;
            $this->geslacht=$geslacht;
            echo "\n Nieuw Persoon-object aangemaakt" . "<br>";
            echo "\n De property naam is:" . $naam . "<br>";
        }

        function setGeslacht(string $geslacht)
        {
            $this->geslacht = $geslacht;
        }
        function getGeslacht()
        {
            return $this->geslacht;
        }


        function setLeeftijd(string $leeftijd)
        {
            $this->leeftijd = $leeftijd;
        }
        function getLeeftijd()
        {
            return $this->leeftijd;
        }

        function getGegevens() {
            echo "<br>naam: " . $this->naam . " leeftijd: " . $this->leeftijd . " geslacht: " . $this->geslacht . "<br>";
        }

    }
}


// + = Public
// - = Private
// # = Protected


// PRIMITIEVE DATATYPES:
// string is nul of meer tekens.
// int is een getal tussen -2,147,483,648 … 2,147,483,647 in.
// char is een teken.
// bool is true of false (waar/niet waar).
// double is voor decimale getallen.
// float is voor grote getallen.
?>