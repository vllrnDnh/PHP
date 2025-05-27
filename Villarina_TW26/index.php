<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1><?php echo "Welcome to My Portfolio"; ?></h1>
    </header>

    <section>
        <h2>About Me</h2>
        <p><?php 
            $name = "Your Name";
            $description = "I am a web developer in training.";
            echo "$name - $description"; 
        ?></p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?></p>
    </footer>

</body>
</html>
