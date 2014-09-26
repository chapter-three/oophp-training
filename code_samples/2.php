<?php

class Person {
  private $name;

  function __construct($name) {
    $this->name = $name;
  }

  function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

}

$person = new Person('asdf');
$person->setName('ryryr');
var_dump($person->getName());
