<?php
class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }
};

$jack = new Person('Jack');
echo $jack->name;