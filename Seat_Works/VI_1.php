<?php
$str1 = "Banana";
$str2 = "Apple";

if (strcmp($str1, $str2) < 0) {
    echo "$str1 should be placed before $str2.";
} else {
    echo "$str1 is after $str2 in the alphabet.";
}
?>
