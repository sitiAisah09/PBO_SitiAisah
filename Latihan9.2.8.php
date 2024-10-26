<?php
//create function with an exception
function checknum($number){
    if($number>1){
        throw new Exception("value must be 1 or below");
    }
    return true;
}

//trigger exception in a "try" block
try {
    checkNum(2);
    //if the exception is thrown, this text will not be shown
    echo 'if you see this, the number is 1 or below';
}

//catch exception 
catch(Exception $e){
    echo 'Message: ' .$e->getMessage();

}
?>