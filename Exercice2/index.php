<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP - Exo2 | Day4</title>
</head>
<body>
    <h1>Exercise 2 : Remove Specific Element</h1>
    <?php 
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December'];

        $delete_month = array_pop($months);

        echo 'Le mois supprimé est ' . $delete_month;
    ?>
</body>
</html>