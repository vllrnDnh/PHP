<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="resume-container">
        <img src="ribbon.png" alt="Ribbon" class="ribbon">

        <?php include('personal_info.php'); ?>
        <?php include('career_objective.php'); ?>
        <?php include('education.php'); ?>
        <?php include('skills.php'); ?>
        <?php include('affiliation.php'); ?>
        <?php include('work_experience.php'); ?>
    </div>
</body>
</html>
