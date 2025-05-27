<!DOCTYPE html>
<html>
<head>
    <title>Gender</title>
</head>
<body>
    <h3> What is your biological attribute. </h3>
<form method="post" action="">
    <label for="gender">Select your gender:</label>
    <select name="gender" id="gender">
        <option value=""> Select </option>
        <option 
        value="male"
            <?php 
                if (isset($_POST["gender"]) && $_POST["gender"] == "male") 
                echo "selected"; 
            ?>
        >Male
        </option>

        <option 
        value="female" 
            <?php 
            if (isset($_POST["gender"]) && $_POST["gender"] == "female") 
                echo "selected"; 
            ?>
        >Female
        </option>
    </select>
    
    <input type="submit" value="Submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gender = strtolower(trim($_POST["gender"]));

        switch ($gender) {
            case "male":
                echo "Hello Sir, how can I help you?";
                break;
            case "female":
                echo "Hello Ma'am, how can I help you?";
                break;
            default:
                echo "Hello, how can I help you?";
        }
    }
?>

</body>
</html>
