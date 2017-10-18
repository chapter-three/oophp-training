<?php

class Person {

  private $name;
  private $age;
  private $height;

  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function setAge($age) {
    $this->age = $age;
  }

  public function getAge() {
    return $this->age;
  }

  public function setHeight($height) {
    $this->height = $height;
  }

  public function getHeight() {
    return $this->height;
  }

}

$person = new Person();
$person->setName('Arlina');
$person->setAge(32);
$person->setHeight(160);

var_dump($person);
