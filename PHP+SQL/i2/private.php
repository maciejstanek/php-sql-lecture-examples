<?php
session_start();
if(!isset($_SESSION['uzytkownik'])) {
	header("Location: login.php");
}
?>
<!doctype html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="img/ico.png">
		<title>Burkina Faso - Panel Kontrolny</title>
		<link rel="stylesheet" href="css/common.css">
	</head>
	<body>
		<div>
			<a href="login.php?logout">Wyloguj się</a>
			<h1>Panel kontrolny</h1>
			<p>Witaj <?=$_SESSION['uzytkownik']?>!</p>
			<table>
				<tr><td>Towar eksportowy</td><td>Udział procentowy</td></tr>
				<tr><td>Złoto</td><td>47%</td></tr>
				<tr><td>Bawełna</td><td>31%</td></tr>
				<tr><td>Głód</td><td>16%</td></tr>
				<tr><td>Sezam</td><td>6%</td></tr>
			</table>
			<div class="akcje">
				<button onclick="alert('Udało sie! Korupcja w Burkina Faso narasta.')">Zwiększ korupcję</button>
				<button onclick="alert('Nasza telewizja nareszcie jest bardziej stronnicza.')">Zwiększ wpływy w mediach</button>
				<button disabled>Popraw warunki bytowe obywateli</button>
			</div>
		</div>
	</body>
</html>
