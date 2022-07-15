<?php
error_reporting(E_ALL);

$number=$_POST['number'];

function isDividedThree($number){
    if($number%3==0){
        echo "<div> $number sayısının 3 ile bölümünden kalan : 0 </div>";
    }
    else{
        echo "bölünebilecek ilk sayı :".($number-$number%3+3);
    }
};
isDividedThree($number);

