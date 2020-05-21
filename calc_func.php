<?php

class Calc{

  public $num1;
  public $num2;
  public $cal;

  public function __construct($num1, $num2, $cal){
    $this->num1 = $num1;
    $this->num1 = $num2;
    $this->cal = $cal;
  }

  // You don't have to initialise object properties in
  // the contstructor method of all classes you create!
  // We are only doing so in this exercise because it
  // suits the application
  //
  // Some programmers believe that initializising
  // object properties is bad practice, Personally I
  // think it is okay when you are certain that all
  // properties will have values assigned to them

  public function calcMethod(){
    switch($this->cal){
      case 'add':
        $result = $this->num1 + $this->num2;
        break;
      case 'sub':
        $result = $this->num1 - $this->num2;
        break;
      case 'mul':
        $result = $this->num1 * $this->num2;
        break;

      default:
        $result = "Error";
        break;
    }
    return $result;
  }
}

?>
