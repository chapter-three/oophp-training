<?php

class Person {

  private $name;
  private $age;
  private $height;
  private $birth_year;

  public function __construct(string $name = 'Anonymous', int $age = NULL, float $height = NULL) {
    $this->name = $name;
    $this->age = $age;
    $this->height = $height;
    $this->birth_year = date('Y') - $this->age;
  }

  public function setName(string $name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function setAge(int $age) {
    $this->age = $age;
  }

  public function getAge() {
    return $this->age;
  }

  public function setHeight(float $height) {
    $this->height = $height;
  }

  public function getHeight() {
    return $this->height;
  }

}

$person = new Person('Arlina', 32, 160);

var_dump($person);
