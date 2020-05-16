<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$ob1 = new Fruit();
$ob1->set_name("Orange");
echo $ob1->get_name();

$f = fopen("test_binary.txt", "wb");
fwrite($f, serialize($ob1));
fclose($f);

$f = fopen("test_binary.txt", "rb");
$ob2 = unserialize(fgets($f));
fclose($f);
print_r($ob2);
echo $ob2->get_name();
?>