<?php

    echo 'The following have 2 set of functions <br>';
    echo '- First one used a simple utilization of Global keyword <br>';
    echo '- Second function used 2 different variables values to add <br>';

//variable declarations
$y = 81;

$a = 5;
$b = 10;

function testGlobal() { // First Function
    global $y; 
    echo "<br> [1] The Global variable is set to $y";
}

testGlobal();


function addNumbers() { //Second Function
    global $a, $b;
    $sum = $a + $b;
    echo "<br> [2] The sum of a and b is: " . $sum;
}

addNumbers();
?>
