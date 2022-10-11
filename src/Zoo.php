<?php

namespace App;

use App\Interfaces\CanSwim;

class Zoo {
    private  ?Enclosure $aquarium;
    private  ?Enclosure $aviary;
    private  ?Enclosure $fence;

    public function __construct()
    {
        $this->aquarium = new Enclosure();
        $this->aviary = new Enclosure();
        $this->fence = new Enclosure();
    }

    static public function getAquarium() : ?Enclosure {
        return self::$aquarium;
    }

    static public function getAviary() : ?Enclosure {
        return self::$aviary;
    }

    static public function getFence() : ?Enclosure {
        return self::$fence;
    }

    static public function addAnimal(Animal $animal) {
        if($animal instanceof CanFly) {
            if(self::$aviary = null) {
                self::$aviary = new Enclosure();
            }
            self::$aviary->addAnimal($animal);
        }

        switch ($animal) {
            case $animal instanceof CanFly:
                self::$aviary->addAnimal();
                break;
            case $animal instanceof CanWalk:
                self::$fence->addAnimal();
                break;
            case $animal instanceof CanWalk:
                self::$aquarium->addAnimal();
                break;
            default:
                throw new Exception("We can\'t store this animal");
        }
    }

    public static function visitTheZoo() {
        if($this::getAviary()){
            echo "Available animal in the aviary : " . PHP_EOL;
            echo $this->getAviary() . PHP_EOL;
        }
        if($this::getAquarium()){
            echo "Available animal in the aviary : " . PHP_EOL;
            echo $this->getAquarium() . PHP_EOL;
        }
        if($this::getFence()){
            echo "Available animal in the aviary : " . PHP_EOL;
            echo $this->getFence() . PHP_EOL;
        }
}
}