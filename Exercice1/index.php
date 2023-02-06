<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP - Exo1 | Day4</title>
</head>
<body>
    <h1>Exercise 1 : Display The Cars</h1>
    <?php 
        $car = array('Dastun', 'Honda', 'BMW');

        $reverse_car = array_reverse($car, true);
        // print_r($reverse_car);
        foreach($reverse_car as $key){
           
            echo $key . '<br>';
        }
    ?>
</body>
</html>