<?php

interface IPerson {
  const NAME='Alice';
  function getName();
}

class BasicPerson implements IPerson {
  private $name=IPerson::NAME;

  function getName() {
    return $this->name . ' Basic';
  }
}

class AdvPerson implements IPerson {
  private $name=IPerson::NAME;

  function getName() {
    return $this->name . ' Advanced';
  }
}

class Client {
  function __construct() {
    $basic = new BasicPerson();
    $adv = new AdvPerson();
    $this->sayHi($basic);
    $this->sayHi($adv);
  }

  // Important type hinting, note that we're using the interface as the type.
  function sayHi(IPerson $person) {
    echo "Hi " . $person->getName() . ".\n";
  }
}

$worker = new Client();
