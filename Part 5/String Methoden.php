<?php
/**
 * PHP Basics PT 5 - Wichtige String Methoden
 * @author _TheMarCraft_zockt
 * @copyright 2024 themarcraft.de
 */

$myString = "Hallo Welt! Vergesst nicht ein Like und ein Abo zu hinterlassen";

/**
 * String Länge - Anzahl der Zeichen (char) bekommen
 */
echo strlen($myString)."\n";

/**
 * In String Konvertieren - So gut wie jeden Datentypen in String Konvertieren
 */
$myFloat = 5.123;
echo strval($myFloat)."\n"; # Hier optional aber sonst nützlich

/**
 * In String Suchen und ersetzen
 */
/*                                              Zu Durchsuch-
 *                Suche nach     Ersetze mit    ender String */
echo str_replace("Welt", "World", $myString)."\n";

/**
 * Anzahl der Wörter Zählen
 */
echo str_word_count($myString)."\n";

/**
 *  String in gleich große Stücke
 *  Splitten
 */
$mySplittedString = str_split($myString, 5);
foreach ($mySplittedString as $string) {
    echo $string."\n";
}

/**
 * String von bestimmten Stellen bekommen
 */
echo substr($myString, 0, 10)."\n";

/**
 *  String Zeichen zufällig vertauschen
 */
echo str_shuffle($myString)."\n";

/**
 * Bonus: Passwort generator programmieren
 */
$myPasswordLength = 10;
$myPasswordPattern = "abcdefghijklmnopABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890#@+-!$%&/()=?*";

$myPassword = str_shuffle($myPasswordPattern);
$myPasswordFinal = substr($myPassword, 0, $myPasswordLength);

echo $myPasswordFinal."\n";