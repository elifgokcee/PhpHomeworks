<?php 
require_once '..\shapesHomework\abstract\Shape.php';
require_once '..\shapesHomework\abstract\ShapeCalculate.php';

class Rectangle extends Shape implements ShapeCalculate{
   public $longEdge;
   public $shortEdge;
   public function __constructor(){
  
    
   }
   
   public function calculateArea()
   {
   $this->area= $this->longEdge*$this->shortEdge;
    return $this->area."  dikdörtgenin alanı";
   }
   public function calculatePerimeter()
   {
    $this->perimeter=2*($this->longEdge+$this->shortEdge);
    return $this->perimeter."  dikdörtgenin çevresi";
    
   }
}