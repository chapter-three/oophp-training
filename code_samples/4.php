<?php

class Person {

  private $name;
  private $age;

  public function __construct(string $name = 'Anonymous', int $age = NULL) {
    $this->name = $name;
    $this->age = $age;
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

  /**
   * Return the person who is older, or NULL if they have the same age.
   *
   * @param \Person $a
   * @param \Person $b
   *
   * @return null|\Person
   */
  public static function returnWhoIsOlder(Person $a, Person $b) {
    if ($a->getAge() > $b->getAge()) {
      return $a;
    }
    elseif ($b->getAge() > $a->getAge()) {
      return $b;
    }

    return NULL;
  }

}

$personA = new Person('Arlina', 32);
$personB = new Person('Methuselah', 969);
$oldest = Person::returnWhoIsOlder($personA, $personB);
echo $oldest->getName() . ' is older';
