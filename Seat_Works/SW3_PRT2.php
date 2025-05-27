<!DOCTYPE html>
<html>
<head>
    <title>Fahrenheit to Celsius</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h2>Fahrenheit to Celsius Converter</h2>

    <form method="post">
        <label>Enter temperature in Fahrenheit:</label>
        <input type="text" name="fahrenheit" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fahrenheit = $_POST['fahrenheit'];

        if (is_numeric($fahrenheit)) {
            $celsius = ($fahrenheit - 32) * 5 / 9;

            echo "<p>$fahrenheit °F = " . round($celsius, 2) . " °C</p>";

            if ($celsius <= 0) {
                echo "<p class='cold'>It's freezing cold!</p>";
            } elseif ($celsius <= 25) {
                echo "<p class='normal'>The weather is moderate.</p>";
            } else {
                echo "<p class='hot'>It's hot outside!</p>";
            }
        } else {
            echo "<p class='error'>Please enter a valid number.</p>";
        }
    }
    ?>

</body>
</html>
