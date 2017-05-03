<?php
$a = 1;
$b = 2;
echo "<p>a=$a b=$b</p>";

function dodaj(&$x, $y) {
	$suma = $x + $y;
	$x = 'testX';
	$y = 'testY';
	return $suma;
}

echo "<p style='color:magenta'>".dodaj($a, $b)."</p>";
echo "<p>a=$a b=$b</p>";

function taFunkcjaRzuciWyjątkiem() {
	throw new Exception("Psia kość!");
}

try {
	taFunkcjaRzuciWyjątkiem();
} catch (Exception $e) {
	echo "<p style='color:red'>".$e->GetMessage()."</p>";
} finally {
	echo "<p style='color: green'>Kończ Waść, wstydu oszczędź!</p>";
}
