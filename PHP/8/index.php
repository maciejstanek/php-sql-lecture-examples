<?php

class Portier {
	private $imię;
	function __construct($imię) {
		$this->imię = $imię;
		echo "<p>Dzień dobry!</p>";
	}
	function __toString() {
		return "<p>Jestem ".$this->imię.".</p>";
	}
	function __destruct() {
		echo "<p>Do widzenia!</p>";
	}
}

$zenek = new Portier("Zenon Kiełbasa");
echo $zenek;
exit;
