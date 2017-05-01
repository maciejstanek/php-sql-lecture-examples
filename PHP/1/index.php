<?php
$a = null;
$b = 1;
$c = 2.0;
$d = "trzy";
$e = ['liczba', 4];
?>

<pre style="border: 1px dotted red;"><?php var_dump(array($a, $b, $c, $d, $e)); ?></pre>

<?php
$a = "przykład słabego typowania"
?>

<pre style="border: 1px dotted green;"><?php var_dump($d); ?></pre>

<?php
$f = ["Kaczka" => "Jezioro", "Skowronek" => "Łąka"];
?>

<pre style="border: 1px dotted blue;"><?php var_dump($f); ?></pre>
