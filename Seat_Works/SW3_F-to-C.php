<!DOCTYPE html>
<html>
<head>
    <title>Fahrenheit to Celsius Converter</title>
    <link rel="stylesheet" type="text/css" href="F-to-C.css">
</head>
<body>
    <h2>Fahrenheit to Celsius Converter</h2>

    <form method="post">
        <label>Enter Fahrenheit:</label>
        <input type="text" name="fahrenheit" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fahrenheit = $_POST['fahrenheit'];

        if (is_numeric($fahrenheit)) {
            $celsius = ($fahrenheit - 32) * 5 / 9;
            echo "<p>$fahrenheit °F is equal to " . round($celsius, 2) . " °C</p>";
        } else {
            echo "<p style='color:red;'>Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
