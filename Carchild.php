<?php

  require 'Car.php';


  class Carchild extends Car {

    public function getModel() {
      return $this->protected_Something;
    }

  }

 
?>