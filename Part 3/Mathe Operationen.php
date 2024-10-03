<?php
/**
 * PHP Basics PT 3 - Mathe Operationen
 * @author _TheMarCraft_zockt
 * @copyright 2024 themarcraft.de
 */


/**
 * Mathe - Operatoren
 */
echo 5 + 5 ."\n";
echo 5 - 5 ."\n";
echo 5 * 5 ."\n";
echo 5 / 5 ."\n";
echo 5 ** 5 ."\n";
echo 14 % 5 ."\n";

/**
 * Rechnen mit Variablen
 */
$x = 5;
$y = 10;
$z = 15;

echo $x + $y * $z ."a\n";
echo ($x - $y) / $z ."\n";

$x += $x; # Speichere $x = $x + $x
$y *= $z; # Speichere $y = $y * $z
$z++; # Speichere $z = $z + 1

echo $x."\n";
echo $y."\n";
echo $z."\n";