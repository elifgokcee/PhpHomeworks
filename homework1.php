<?php 
error_reporting(E_ALL);
function triangle($row){
    $wr=1;
    while($wr<=$row){
   
        for($i=1;$i<=$wr;$i++){
           echo "0"." ";
        }
        echo "<br>";
        $wr++;
    }
   
}
    
;
triangle(10);

?>