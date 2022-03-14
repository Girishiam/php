<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OoPs</title>
</head>
<body>

<?php
class Fruit {

  public $name;
  public $color;
  public $quantity;


  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }

  function set_quantity($quantity) {
    $this->quantity = $quantity;
  }
  function get_quantity() {
    return $this->quantity;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$apple->set_quantity('3');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();
echo "<br>";
echo "Quantity: " .  $apple->get_quantity();
echo "<br><br><br><br>";


$orange = new Fruit();
$orange->set_name('Orange');
$orange->set_color('Orange');
$orange->set_quantity('5');
echo "Name: " . $orange->get_name();
echo "<br>";
echo "Color: " .  $orange->get_color();
echo "<br>";
echo "Quantity: " .  $orange->get_quantity();




class Cars extends Fruit{
  public $company;
  public $type;

  function __construct($company, $type){
    $this->company= $company;
    $this->type= $type;

  }
  function get_car(){
    return $this->company;
  }
  function get_type(){ 
    return $this->type;
  }
}

$car = new Cars("BMW" , "Sedan");
echo $car->get_type();
echo "<br/>";
echo $car->get_car();
echo "<br/>";
$apple = new Fruit;
$apple->set_name("Apple");

echo "Fruit: " . $apple->get_name()." in " . $car->get_car();


//inheritance//

class FruitS {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
    echo "<br/>";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends FruitS {
  public function message() {
    echo "Am I a fruit or a berry? "; 
    echo "<br/>";
  }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();





//constant////////////////////////////////
class hello {
  const LEAVING_MESSAGE = "He there ! How are you?";
  public function hihi() {
    echo self::LEAVING_MESSAGE;
    echo "<br/>";
  }
}

$goodbye = new hello();
$goodbye->hihi();


//abstract classes////
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}


class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}


$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();




?>


    
</body>
</html>