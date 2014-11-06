<?php

abstract class APerson {
  abstract function getName();
  abstract function setName($name);

  public function sayHi() {
    echo "hi\n";
  }
}

class CPerson extends APerson {
  private $name;

  function getName() {
    return $this->name;
  }

  function __construct() {
    $this->sayHi();
  }

  function setName($name) {
    $this->name = $name;
  }
}

$person = new CPerson();
$person->setName('Alice');
echo $person->getName();
