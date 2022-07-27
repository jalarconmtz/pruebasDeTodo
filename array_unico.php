<?php 

$array = [
    [
        'iataCity' => 'NRT',
        'nameCity' => 'Tokyo',
    ],
    [
        'iataCity' => 'MIA',
        'nameCity' => 'Miami',
    ],
    [
        'iataCity' => 'DFW',
        'nameCity' => 'Dallas',
    ],
    [
        'iataCity' => 'LAX',
        'nameCity' => 'Los Angeles',
    ],
    [
        'iataCity' => 'MIA',
        'nameCity' => 'Miami',
    ],

];

var_dump($array);

$sinReperir = array_map("unserialize", array_unique(array_map("serialize", $array)));
//imprime resultado
var_dump($sinReperir);

?>