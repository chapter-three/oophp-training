<?php

function Person() {
  $person = new stdClass();
  $person->name = 'frank';
  $person->talk = function() {
    echo 'hi';
  };
  return $person;
}

$person = Person();
var_dump(is_a($person, 'stdClass'));
