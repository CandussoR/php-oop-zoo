<?php

namespace App\Animals;
use App\Animals\Fish;

class Whale extends Fish {

    public function getNoise() : string {
        return "splash";
    }
}
