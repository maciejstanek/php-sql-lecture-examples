<?php

$x = 1;
if($x > 2) {
	echo '<p>Programuję w .NETcie już trzecie stulecie,</p>';
} else {
	echo '<p>Bo kto się w PeHaPie połapie?</p>';
}

switch($x) {
	case 0:
		echo '<p>I zmierzam do celu z użyciem SQLu</p>';
		break;
	case 1:
		echo '<p>Pod Microsoft Windows Vista.</p>';
		break;
	default:
		echo '<p>A kiedy mi smutno, statyczny konstruktor</p>';
}

if('0' == 0) {
	echo '<p>Utworzę w edytorze,</p>';
}
if('0' === 0) {
	echo '<p>Bo wewnątrz mej głowy mam świat obiektowy,</p>';
}
if([1, 2] === [1, 2]) {
echo '<p>Ja, smutny programista.</p>';
}

$spaceship = [1 <=> 0, 1 <=> 1, 0 <=> 1];

?>

<pre><?php var_dump($spaceship); ?></pre>

