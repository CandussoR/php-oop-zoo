<?php

require __DIR__ . '/vendor/autoload.php';

use App\Animals\{Fish, BubbleFish, CatFish, ClownFish, Whale, Dove, Elephant, Parrot, Zebra};

$animals = array(
    'fish1' => new Fish('fish1'),
    'fish2' => new Fish('fish2'),
    'fish3' => new Fish('fish3'),
    'fish4' => new Fish('fish4'),
    'fish5' => new Fish('fish5'),
    'bubbleFish1' => new BubbleFish('bubble1'),
    'bubbleFish2' => new BubbleFish('bubble2'),
    'bubbleFish3' => new BubbleFish('bubble3'),
    'catFish1' => new CatFish('catFish1'),
    'catFish2' => new CatFish('catFish2'),
    'fishyJoke' => new ClownFish('fishyJoke'),
    'elephant1' => new Elephant('elephant1'),
    'elephant2' => new Elephant('elephant2'),
    'zebra' => new Zebra('zebra'),
    'parrot1' => new Parrot('parrot1'),
    'parrot2' => new Parrot('parrot2'),
    'parrot3' => new Parrot('parrot3'),
    'parrot4' => new Parrot('parrot4'),
    'parrot5' => new Parrot('parrot5'),
    'parrot6' => new Parrot('parrot6'),
    'parrot7' => new Parrot('parrot7'),
'parrot8' => new Parrot('parrot8'),
    'parrot9' => new Parrot('parrot9'),
    'parrot10' => new Parrot('parrot10'),
    'dove1' => new Dove('dove1'),
    'dove2' => new Dove('dove2')
);

foreach($animals as $key => $animal) {
    echo $key . " says " . $animal->getNoise() . "\n";
}