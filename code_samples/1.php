<?php

class Person {

  public $name;
  public $age;

  function getName() {
    return $this->name;
  }

  function getAge() {
    return $this->age;
  }

}

$person = new Person();
$person->name = 'Arlina';
$person->age = 32;

var_dump($person);
