<?php

namespace App;

class Enclosure {

    private array $animals = array();

    public function addAnimal(Animal $animal) {
        // $this->animals[];
        return array_push($this->animals, $animal);
    }

    public function __toString() : string
    {
        $stringEnclosure = "";
        foreach ($this->animals as $animal) {
            $stringEnclosure .= $animal->getName() . " says " . $animal->getNoise() . PHP_EOL;
        }
        return $stringEnclosure;
    }
}