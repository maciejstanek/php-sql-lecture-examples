<?php
$a = $_GET['liczba'];
$b = $a + 2;
$tag = "<p>Liczba <b>a</b> wynosi ".$a."</p>"
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Przykład 1</title>
	</head>
	<body>

		<?php echo $tag; ?>
		<p>Liczba <b>b</b> wynosi <?=$b?></p>

		<pre><?php var_dump($a); ?></pre>
		<pre><?php var_dump($b); ?></pre>

	</body>
</html>
