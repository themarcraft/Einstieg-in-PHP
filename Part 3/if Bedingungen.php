<?php
/**
 * PHP Basics PT 3 - If Bedingungen
 * @author _TheMarCraft_zockt
 * @copyright 2024 themarcraft.de
 */

/**
 * Syntax von if Bedingungen
 */
if (true/* Bedingung */){
    // Wenn Bedingung Wahr ist, führe das hier aus
}else{ // Optional
    // Sonst das hier
}

/**
 * 'Wahrheits' Operatoren
 */
echo (5 > 1 ? "true" : "false") ."\n";
echo (5 >= 1 ? "true" : "false") ."\n";
echo (5 < 1 ? "true" : "false") ."\n";
echo (5 <= 1 ? "true" : "false") ."\n";
echo (5 <=> 1 ? "true" : "false") ."\n";

echo (5 == 5 ? "true" : "false") ."\n";
echo (5 != 5 ? "true" : "false") ."\n";
echo (5 <> 5 ? "true" : "false") ."\n";

/**
 * Logische Operatoren
 */
$a = 5;
$b = 5;
$c = 15;
$d = 20;

if ($a == $b && $c <= $d || $d > $b){
    echo 'if: true';
}elseif ($a != $b || $c > $d){
    echo 'elif: true';
} else{
    echo 'beides: false';
}