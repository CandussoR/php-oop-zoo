<?php

require __DIR__ . '/vendor/autoload.php';

use App\Animals\{Fish, BubbleFish, CatFish, ClownFish, Whale, Dove, Elephant, Parrot, Zebra};

$myZoo = new Zoo();

$animals = array(
    new Fish('fish1'),
    new Fish('fish2'),
    new Fish('fish3'),
    new Fish('fish4'),
    new Fish('fish5'),
    new BubbleFish('bubble1'),
    new BubbleFish('bubble2'),
    new BubbleFish('bubble3'),
    new CatFish('catFish1'),
    new CatFish('catFish2'),
    new ClownFish('fishyJoke'),
    new Elephant('elephant1'),
    new Elephant('elephant2'),
    new Zebra('zebra'),
    new Parrot('parrot1'),
    new Parrot('parrot2'),
    new Parrot('parrot3'),
    new Parrot('parrot4'),
    new Parrot('parrot5'),
    new Parrot('parrot6'),
    new Parrot('parrot7'),
    new Parrot('parrot8'),
    new Parrot('parrot9'),
    new Parrot('parrot10'),
    new Dove('dove1'),
    new Dove('dove2')
);

foreach($animals as $key => $animal) {
    echo $key . " says " . $animal->getNoise() . "\n";
}

$enclosure = new \App\Enclosure();
$enclosure->addAnimal($animals['parrot9']);

echo $enclosure;