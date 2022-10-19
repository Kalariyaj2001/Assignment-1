<?php

function first($num)
{  
    $num += 5; 
}  
function second(&$num)  
{
    $num +=2;
}
$number = 70;
first($number);
echo "original value is : $number <br>";

second($number);
echo "original value is : $number <br>";



//function is ablock of statement that can be used repeatedly in a program
