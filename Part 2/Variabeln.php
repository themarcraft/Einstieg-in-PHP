<?php
/**
 * PHP Basics PT 2 - Variablen
 * @author _TheMarCraft_zockt
 * @copyright 2024 themarcraft.de
 */

/**
 * Variablen beginnen immer mit einem $ Zeichen
 * sie können alles Speichern
 */

$test = 'Hallo'; # String
$test .= ' Welt';
$test2 = 1; # Integer
$test3 = 1.5; # Float/Double
$test4 = false; # Boolean

/**
 *  Arrays sind (mehr oder weniger) Listen,
 *  die einen Index (natürliche Zahl) besitzen,
 *  mit dem du bestimmte dinge im Array
 *  abrufen kannst
 */
$test5 = array("wert1", "wert2", "wert3"); # Arrays mit Werten erstellen
$test6 = array('username' => 'admin', 'name' => 'Administrator'); # Arrays mit Werten und String als Index

$test5[0] = "test"; # Ein Basic Array mit Zahl als Index einen Wert zuordnen
$test6['vollerName'] = "Max Mustermann".$test; # Ein Array mit String als Index einen Wert zuordnen
/*          |               |
 *        Index             |
 *                         Wert
 */


/**
 * Ausgabe der Variablen
 */
echo "String Variable: ".$test."\n";
echo "Integer Variable: ".$test2."\n";
echo "Float Variable: ".$test3."\n";
echo "Boolean Variable: ".($test4 ? "true" : "false")."\n";
echo "Array 1 Variable: ".$test5[1]."\n";
echo "Array 2 Variable: ".$test6['vollerName']."\n";

echo($test." : ".$test2);
