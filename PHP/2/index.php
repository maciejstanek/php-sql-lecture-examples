<?php
$tablica = ['a', 'b', 'c'];
$tablica[1] = 'd';
$tablica[] = 'e';
echo '<pre style="border:1px dotted red">';
var_dump($tablica);
echo '</pre>';

echo '<ul style="border:1px dotted green">';
foreach($tablica as $element) { // &$element - referencje
	echo '<li>'.$element.'</li>';
}
echo '</ul>';

$tablica2 = [
	'instrument' => 'ukulele',
	'roślina' => 'dracena',
	'żarówka' => 'LED',
];
echo '<ul style="border:1px dotted blue">';
foreach($tablica2 as $klucz => $element) {
  echo '<li><b>'.$klucz.'</b> - '.$element.'</li>';
}
echo '</ul>';

