<?php

define('DB_HOST', '127.0.0.1');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', 'Maciej&28');
define('DB_DATABASE', 'ai_example');
define('DB_SALT', '*&^ibc6b^@@B7p6B8^%b4#$6(*b7*n');

session_start();

function sessionIsSet() {
	if(isset($_SESSION['name'])) {
		return true;
	}
	return false;
}

function sessionLoginForwarded() {
	if(isset($_SESSION['login_success'])) {
		unset($_SESSION['login_success']);
		return true;
	}
	return false;
}

function sessionHashPassword($password) {
	return sha1($password.DB_SALT);
}

function sessionStart($login, $password) {
	$conn = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if($conn->connect_error) {
		die("SQL_FATAL: ".$conn->connect_error);
	}
	$escapedLogin = $conn->escape_string($login);
	$escapedPassword = sessionHashPassword($password);
	$stmt = $conn->prepare('SELECT full_name FROM users WHERE login = ? AND password = ?');
	$stmt->bind_param("ss", $escapedLogin, $escapedPassword);
	$stmt->execute();
	$stmt->bind_result($name);
	if($stmt->fetch()) {
		$_SESSION['name'] = $name;
		$_SESSION['login_success'] = true;
		header('Location: index.php');
	}
	$conn->close();
}

function sessionDrop() {
	session_destroy();
	header('Refresh: 0');
}

function sessionGetName() {
	return $_SESSION['name']??'nieznajomy';
}

?>

<title>Login Example</title>
