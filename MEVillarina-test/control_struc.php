<?php
$hour = date("H");

if ($hour < 18 || $hour == 18) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>