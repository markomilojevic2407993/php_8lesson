<?php  




$osobe=[
    'Toma'=>[
        'ime'=>'Tomislav',
        'prezime'=>'Nikolic',
        'godine'=>29,
    ],
    'nidza'=>[
        'ime'=>'Nikola',
        'prezime'=>'Ivankov',
        'godine'=>33,
    ],
    'pax'=>[
        'ime'=>'Darko',
        'prezime'=>'Niklic',
        'godine'=>36,
    ],
];

foreach ($osobe as $osoba => $podaci) {
    foreach($podaci as $podaci=> $licniPodaci)
    
    echo  $osoba.'->'.$podaci.':'.$licniPodaci.'<hr>';
    
}




?>