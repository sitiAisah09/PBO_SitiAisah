<?php
$x = 5;
$y = 10;
function myTest()
{
    $GLOBALS['Y'] = $GLOBALS['X'] + $GLOBALS['Y'];

}
myTest();
echo $y;
?>