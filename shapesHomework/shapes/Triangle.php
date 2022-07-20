<?php 
require_once '..\shapesHomework\abstract\Shape.php';
require_once '..\shapesHomework\abstract\ShapeCalculate.php';
class Triangle extends Shape implements ShapeCalculate{
   public $height;
   public $baseEdge;
   public $edge_1;
   public $edge_2;
   public function __constructor(){

    
   }
   public function calculateArea()
   {
   $this->area=($this->height*$this->baseEdge)/2;
    return $this->area."  üçgenin alanı";
   }
   public function calculatePerimeter()
   {
    $this->perimeter=($this->baseEdge+$this->edge_1+$this->edge_2);
    return $this->perimeter."  üçgenin çevresi";
    
   }

}