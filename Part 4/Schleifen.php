<?php
/**
 * PHP Basics PT 4 - Schleifen
 * @author _TheMarCraft_zockt
 * @copyright 2024 themarcraft.de
 */

/**
 * While Schleifen
 */
echo "- while Schleife\n";
$i = 1;
while ($i <= 5/* Bedingung */){
    // Mache etwas solange die Bedingung true ist
    echo "Durchlauf Nummer ".$i."\n";
    $i++;
}

echo "- do...while Schleife\n";
$i = 1;
do{
    // Mache etwas während die Bedingung true ist [+ garantierte einmalige Ausführung]
    echo "Durchlauf Nummer ".$i."\n";
    $i++;
}while($i <= 5/* Bedingung */);

/**
 * for Schleifen
 */
echo "- for Schleife\n";
/*
 *         Bedingung
 *  Startwert  |   Schritte
 *     |       |      |            */
for($i = 5; $i > 0; $i--){
    echo "Durchlauf Nummer ".$i."\n";
}

/**
 * foreach Schleifen
 */
echo "- for each Schleife\n";
$benutzernamen = array("Max", "Admin", "Root", "Sudo");

foreach ($benutzernamen as $benutzername/* Listet jedes Element des Arrays einzeln auf*/) {
    echo $benutzername."\n";
}

echo "-\n";
for ($i = count($benutzernamen) - 1; $i >= 0; $i--){
    echo $benutzernamen[$i]."\n";
}