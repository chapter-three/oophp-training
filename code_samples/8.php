<?php
// A Factory creating Block/Node objects extending an abstract Entity
// implementing an EntityInterface interface.

interface EntityInterface {
  public function setTitle($title);
  public function view();
}

abstract class Entity implements EntityInterface {
  protected $id = NULL;
  protected $title = "";
  public function __construct($id) {
    $this->id = $id;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
}

class Block extends Entity {
  public function view() {
    return "Block: $this->id $this->title" . PHP_EOL;
  }
}

class Node extends Entity {
  public function view() {
    return "Node: $this->id $this->title" . PHP_EOL;
  }
}

class EntityFactory {
  private $id = 0;

  protected function __construct() {
  }
  public static function getInstance() {
    static $instance = null;
    if (null === $instance) {
       $instance = new static();
    }

    return $instance;
  }
  public function create($type) {
    $entity = new $type($this->id);
    $this->id++;
    return $entity;
  }
}

$factory = EntityFactory::getInstance();

$block = $factory->create('Block');
$block->setTitle("The Title");
print $block->view();

$block2 = $factory->create('Block');
$block2->setTitle("The Title2");
print $block2->view();

$node = $factory->create('Node');
$node->setTitle("The Title3");
print $node->view();

$node2 = $factory->create('Node');
$node2->setTitle("The Title4");
print $node2->view();
