<?php
class Fruit {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  protected function showInfo() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

/*

$f = new Fruit("Apple", "Red");
$f->showInfo();

*/

class Strawberry extends Fruit {
  
    private $size;
    

    public function size($h, $w) {
        $this ->h = $h;
        $this ->w = $w;
        $this->size = $h*$w;
        
    }

    public function message() {
        $this -> showInfo();
        echo  "<br> Size: {$this->size}";
    }


}

$strawberry = new Strawberry("Strawberry", "red"); 
$strawberry->size(15,5);
$strawberry->message(); 


?>