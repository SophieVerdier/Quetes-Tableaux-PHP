<?php

$movies = ["Les Aventuriers de l'arche perdue" => 1982, 
"Indiana Jones et le Temple maudit" => 1984,
"Indiana Jones et la Dernière Croisade" => 1989, 
];


foreach ($movies as $key => $movie) {
    echo $key ." : ". $movie."<br/>";
}

arsort($movies);


foreach ($movies as $key => $movie) {
    echo $key ." : ". $movie."<br/>";
}

?>
