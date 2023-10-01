<?php     

$navbar=[
    'home'=>'https://www.google.com/',
    'about'=>'https://www.youtube.com/',
    'contact'=>'https://lichess.org/'
];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>


    <nav>
               <?php foreach($navbar as $nav=>$link): ?>
              <a href="<?=$link?>"><?=$nav?></a>                
                 <?php endforeach;?>
            </nav>
    
</body>
</html>