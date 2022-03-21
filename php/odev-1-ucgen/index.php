<?php
function triangle($param){
    $count = 1;
    $result = "";
    while($count <= $param){
        for($i = 1; $i <= $count; $i++){
            $result .= "*";
        }
        
        $result .= "<br>";
        $count++;
    }
    return $result;
}
echo triangle(15);