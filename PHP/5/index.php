<?php

//$x = "ta zmienna nie ma istnieć dlatego ją wykomentowano";
echo '<p>'.($x??"Motyla noga!").'</p>';

echo '<p>Potęgowanie: 2⁸ = '.(2**8).'</p>';

require "inny_skrypt.php";

fopen("nieistniejacy_plik.txt", "r") or die('<p>O kurka!</p>');
echo "Jeśli require zwróci błąd to ten tekst się nie wyświetli.";

// Inne ważne polecenia:
//   exit
//   require_once
//   include
//   include_once
