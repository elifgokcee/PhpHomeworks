<?php 
require_once '..\shapesHomework\abstract\Shape.php';
require_once '..\shapesHomework\abstract\ShapeCalculate.php';
class Square extends Shape implements ShapeCalculate{
   public $edge;
   public function __constructor(){
   
    
    
   }
   public function calculateArea()
   {
   $this->area= $this->edge*$this->edge;
    return $this->area."  karenin alanı";
   }
   public function calculatePerimeter()
   {
    $this->perimeter=4*($this->edge);
    return $this->perimeter." karenin  çevresi";
    
   }
}