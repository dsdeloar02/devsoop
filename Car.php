<?php

  class Car {

    public $color;
    public $model;
    public $is_new;
    private $milage;

    protected $protected_Something;

    public function __construct($model , $color, $is_new){
      $this->model = $model;
      $this->color = $color;
      $this->is_new = $is_new;
      $this->protected_Something = "Something";

    }

  // Get Millage 

    public function setMilage($milage){
      $this->milage = $milage; 
    }

// Set Millage

    public function getMilage(){
      return $this->milage;
    }


  }
?>