<?php

interface IPerson {

  public function getName();
  public function setName(string $name);
  public function sayHi();
  public function work();

}

abstract class APerson implements IPerson {
  private $name;

  public function getName() {
    return $this->name;
  }

  public function setName(string $name) {
    $this->name = $name;
  }

  public function sayHi() {
    echo "Hi";
  }

  abstract public function work();
}

class Developer extends APerson {

  public function work() {
    echo 'Coding!' . PHP_EOL;
  }

  public function sayHi() {
    parent::sayHi();
    echo "I'm a developer." . PHP_EOL;
  }

}

class Designer extends APerson {

  public function work() {
    echo 'Designing!' . PHP_EOL;
  }

  public function sayHi() {
    parent::sayHi();
    echo "I'm a designer." . PHP_EOL;
  }

}

//$person = new APerson(); // Error!

$programmer = new Developer();
$programmer->sayHi(); // Hi
$programmer->work(); // Coding!

$designer = new Designer();
$designer->sayHi(); // Hi
$designer->work(); // Designing!
