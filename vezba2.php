<?php    


$imena=['Toma','Petar', 'Vlada'];

/*foreach($imena as &$ime){
    $malimSlovima[]=strtolower($ime);
    
}*/



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php  foreach($imena as $ime):  ?>

                <p><?= $ime; ?></p>

        <?php endforeach;?>


</body>
</html>