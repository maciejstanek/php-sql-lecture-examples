<?php

$x = 123;
echo $x;
$x = "foo";
echo $x;
$x = [
	123 => "foo",
	"bar" => [1, 2, 3],
	"baz" => 123,
];

?>

<pre><?=var_dump($x)?></pre>

