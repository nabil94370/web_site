<?php

$temperatures = [ 12, 15, 27, -2, 5, -42, 38];
$somme = 0;
$index = 0;

for ($i = 0; $i < count($temperatures); $i++) {
    $somme += $temperatures[$i];
}

echo '<p>Moyenne = '.$somme/count($temperatures).'</p>';
echo '<p>Nombre d\'éléments dans le tableau = ' . count($temperatures).'</p>';
echo '<p>Somme = '. $somme.'</p>';





sort($temperatures);

echo 'Voici la listes des températures : ';
for ($i = 0; $i < count($temperatures); $i++) {
    echo $temperatures[$i];
    if ($i != count($temperatures)-1) {
        echo ', ';
    }

}


//EXO  2

$clients = array(
    'Particuliers' => array(
    array('Pierre', 43),
    array('Jacques', 27),
    array('Nathalie', 25)
    )
   );

for ($i = 0; $i < count($clients); $i++) {
    if($clients['Particuliers'][$i][1] > 30) {
        echo '<p>'.$clients['Particuliers'][$i][0].'</p>';
    }
}

if(in_array('Pierre', $clients['Particuliers'][0])) {
    echo '<p>Pierre existe dans le tableau</p>';
}


echo '<p>'. $clients['Particuliers'][2][0].' à '. $clients['Particuliers'][2][1].' ans !</p>';


//EXO 3

$personnes = array(
    'Abbes' => array('Amine', 'Sucy'),
    'Test1' => array('Amine', 'Sucy'),
    'test2' => array('Amine', 'Sucy')
);

print_r($personnes);



//EXO 4
echo '<p></p>';
$couleurs = array( 'rouge', 'bleu', 'vert');

array_push($couleurs,'orange','rose');

print_r($couleurs);


array_splice($couleurs, 1, 1);
echo '<p></p>';
print_r($couleurs);

for ($i = 0; $i < count($clients); $i++) {
    echo $couleurs[$i];
}

