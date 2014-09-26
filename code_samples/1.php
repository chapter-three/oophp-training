<?php

function cat() {
  $cat = new stdClass();
  $cat->name = 'frank';
  $cat->meow = function() {
    echo 'meow';
  };
  return $cat;
}

$cat1 = cat();
unset($cat1->name);
var_dump($cat1->name);
call_user_func($cat1->meow);
