<?php
require_once '..\shapesHomework\shapes\Rectangle.php';
require_once '..\shapesHomework\shapes\Square.php';
require_once '..\shapesHomework\shapes\Triangle.php';

$rectangle=new Rectangle();
$rectangle->longEdge=4;
$rectangle->shortEdge=5;

echo $rectangle->calculateArea().'<br>';
echo $rectangle->calculatePerimeter().'<br>';

$square=new Square();
$square->edge=4;

echo $square->calculateArea().'<br>';
echo $square->calculatePerimeter().'<br>';

$triangle=new Triangle();
$triangle->baseEdge=6;
$triangle->height=10;
$triangle->edge_1=8;
$triangle->edge_2=10;

echo $triangle->calculateArea().'<br>';
echo $triangle->calculatePerimeter().'<br>';

