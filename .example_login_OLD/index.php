<?php
require_once 'common.php';
if(isset($_POST['logout'])) {
	sessionDrop();
}
?>

<?php if(sessionLoginForwarded()): ?>
<div style="color:green">Logowanie powiodło się!</div>
<?php endif; ?>

<h1>Witaj, <?=sessionGetName()?></h1>
<p>To jest paragraf widoczny dla publicznie. Lorem ipsum dolor sit amet. Twój identyfikator sesji PHP to <i><?=session_id()?></i>.</p>

<?php if(sessionIsSet()): ?>
<p>To jest paragraf widoczny dla zalogowanych użytkowników. Lorem ipsum dolor sit amet.</p>
<form method="POST">
	<input type="hidden" value="1" name="logout">
	<input type="submit" value="Wyloguj">
<form>
<?php else: ?>
<a href="login.php">Zaloguj się</a>
<?php endif; ?>

