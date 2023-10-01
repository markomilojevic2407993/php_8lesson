<?php   

$automobili=[
    'opel'=>[
        'model'=>'corsa',
        'godiste'=>2002,
    ],
    'wolcvagen'=>[
        'model'=>'golf5',
        'godiste'=>2016,
    ],
    'reno'=>[
        'model'=>'megan',
        'godiste'=>2012,
    ],
    'honda'=>[
        'model'=>'civik',
        'godiste'=>2017,
    ],
    'mazda'=>[
        'model'=>'tri',
        'godiste'=>2008,
    ],
];
    $godina=intval(date('Y'));
foreach ($automobili as $auto => $atributiAuta) {
    
        
        $starostAutomobila=$godina-$atributiAuta['godiste'];
        
    if($starostAutomobila > 5 && $starostAutomobila <= 10){
        $starost='noviji auto';
    }
    elseif($starostAutomobila > 10  && $starostAutomobila <= 20){
        $starost='stariji auto';}
        elseif($starostAutomobila > 20){
            $starost='old tajmer';
        }

        echo $auto.' '.$atributiAuta['model'].' je '.$starost.'<br>'  ;

}


















?>