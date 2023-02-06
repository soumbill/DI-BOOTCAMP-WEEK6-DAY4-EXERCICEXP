<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP - Exo4 | Day4</title>
</head>
<body>
    <h1>Exercise 4 : Subset Of Another</h1>
    <?php 
        $cordonnees = ['KONE', 'ISMAEL', 'BILL', 'MARLINS'];
        $nom = ['ISMAEL', 'MARLINS'];

        // $result1 = in_array('ISMAEL', $cordonnees);
        // $result2 = in_array('MARLINS', $cordonnees);

        // var_dump($result1);
        // var_dump($result2);
        foreach($cordonnees as $cordonnee){
            foreach($nom as $elt){
                if($cordonnee == $elt){
                   
                    echo $cordonnee .'<br>';
                     
                }

            }
            
        }


    ?>
</body>
</html>