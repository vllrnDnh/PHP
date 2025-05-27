<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SW4 - Functions</title>
</head>
<body>
    <?php
        
        date_default_timezone_set('Asia/Manila');

        $currentD_T = date("Y-m-d H:i:s");
        echo "Current Date and Time: " . $currentD_T . "<br>";

        $formattedD = date("l, F d, Y");
        echo "Formatted Date: " . $formattedD . "<br>";

        $formatted_time = date("h:i:s A");
        echo "Formatted Time: " . $formatted_time . "<br>";

        $sevenDaysAfter = date("Y-m-d", strtotime("+7 days"));
        echo "Date 7 days from today: " . $sevenDaysAfter;
    ?>
</body>
</html>