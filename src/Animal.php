<?php

namespace App;

abstract class Animal {
    private string $name;

    public function getName() : string {
        return $this->name;
    }

    function __construct(string $name) {
        $this->name = $name;
    }

    abstract protected function getNoise() : string;

    public function noise() : string {
        return $this->getNoise();
    }

}
