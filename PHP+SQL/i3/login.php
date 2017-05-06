<?php
define('TAJNA_SOL', 'TajnaSol');
function haszuj_haslo($haslo) {
	return md5($haslo . TAJNA_SOL);
}

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
	$stmt = $conn->prepare("SELECT imie FROM uzytkownicy WHERE login = ? AND haslo = ?");
	$stmt->bind_param("ss", $_POST['uzytkownik'], haszuj_haslo($_POST['haslo']));
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();

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
		</div>
	</body>
</html>
