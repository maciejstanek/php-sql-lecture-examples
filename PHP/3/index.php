<pre style="border:1px solid red"><?php var_dump($_POST); ?></pre>
<pre style="border:1px solid green"><?php var_dump($_GET); ?></pre>
<?php
// inne przykładowe specjalne tablice globalne to:
//  - $_COOKIE,
//  - $_SESSION,
//  - $_SERVER,
//  - $_FILES,
//  - $_REQUEST,
//  - $_ENV.
?>

<form style="border:1px dotted red" method="POST">
	<input name="input_post">
	<input type="submit">
</form>

<form style="border:1px dotted green" method="GET">
	<input name="input_get">
	<input type="submit">
</form>
