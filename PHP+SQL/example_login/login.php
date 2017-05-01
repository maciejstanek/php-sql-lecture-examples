<?php
require_once 'common.php';
$authFailed = false;
if(isset($_POST['submitted'])) {
	sessionStart($_POST['login'], $_POST['password']);
	$authFailed = true;
}

?>

<?php if($authFailed): ?>
<div style="color:red">Wprowadzono zły login bądź hasło</div>
<?php endif; ?>

<form method="POST">
	<input name="login" placeholder="Użytkownik" value="<?=$_POST['login']??''?>">
	<input type="password" name="password" placeholder="Hasło" value="<?=$_POST['password']??''?>">
	<input type="hidden" name="submitted" value="1">
	<input type="submit" value="Zaloguj">
</form>
