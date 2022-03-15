
<?php

$movies = [
"Les Aventuriers de l'arche perdue" => ['Harrison Ford','Karen Allen', 'Paul Freeman'], 
"Indiana Jones et le Temple maudit" => ['Harrison Ford','Kate Capshaw', 'Jonathan Ke Quan'],
"Indiana Jones et la Dernière Croisade" => ['Harrison Ford','Sean Connery', 'River Phoenix'],
];


foreach ($movies as $key => $movie) {
    echo "Dans le film ". $key ." , "."les principaux acteurs sont :"."<br/>";
foreach($movie as $actor) {
    echo $actor."<br/>";
        }

        
}


?>
