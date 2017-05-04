<?php
session_start();
$msg = '';
if(isset($_GET['logout'])) {
	session_unset(); 
	session_destroy(); 
	session_start();
	$msg = 'Wylogowano pomyślnie!';
}
if(isset($_POST['wyslano'])) {
	$conn = new mysqli('localhost', 'ai', 'abc123', 'ai_login');
	$sql = "SELECT imie FROM uzytkownicy ";
	$sql .= "WHERE login = '" . $_POST['uzytkownik'] . "' ";
	$sql .= "AND haslo = '" . $_POST['haslo'] . "'";
	$result = $conn->query($sql);
	if($result->num_rows === 0){
		$msg = "Nieprawidłowe dane logowania";
	} else {
		$_SESSION["uzytkownik"] = $result->fetch_assoc()['imie'];
		header("Location: private.php");
	}
}
?>
<!doctype html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="img/ico.png">
		<title>Burkina Faso - Logowanie</title>
		<link rel="stylesheet" href="css/common.css">
	</head>
	<body>
		<div>
			<a href=".">Wróć do strony głównej</a>
			<h1>Zaloguj się do systemu rządowego</h1>
			<img class="gif" src="img/flag_animated.gif">
			<form method="POST" action="login.php">
				<input type="hidden" name="wyslano" value="1">
				<div>
					<div>Nazwa użytkownika</div>
					<input type="text" name="uzytkownik" value="<?=$_POST['uzytkownik']??''?>">
				</div>
				<div>
					<div>Hasło</div>
					<input type="text" name="haslo"> <!-- powinno być type="password" -->
				</div>
				<input type="submit" value="Zaloguj!">
			</form>
			<div class="msg"><?=$msg?></div>
			<p><strong>Uwaga!</strong> System nie jest odporny na ataki SQL Injection. W imieniu Zgromadzenia Narodowego prosimy o nie włamywanie się do systemu.</p>
		</div>
	</body>
</html>
