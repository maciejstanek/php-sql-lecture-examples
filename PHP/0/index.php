<?php
echo "<div style=\"color:red\">Hello World!</div>";
?>

<!-- Bardziej uporządkowana metodyka poniżej -->
<?php
$text = 'Hello World!';
$color = "green";
?>
<div style="color:<?=$color?>"><?=$text?></div>
<!-- Oczywiście to tylko przykład -->
<!-- Sugeruję nie stylować tak stron -->
