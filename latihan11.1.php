<?php
//create function with an exception
function checkNum($number) {
    if($number>1) {
        throw new Exception("value must be 1 or below");
    
    }
    return true;
}

//triger exception
checkNum(2);
?>