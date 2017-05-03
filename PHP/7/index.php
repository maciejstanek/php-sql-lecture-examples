<?php

class Rezystor {
	public $wartość;
	public $rokProdukcji;
	public function ustawWartość($nowaWartość) {
		$this->wartość = $nowaWartość;	
	}
	public function formatujWartość() {
		$ret = '<p style="color:green">';
		$ret .= $this->wartość."Ω";
		$ret .= '</p>';
		return $ret;
	}
}

$rezystor1 = new Rezystor;
$rezystor1->ustawWartość(220);
$rezystor1->rokProdukcji = "2015";

echo '<pre style="border:3px dashed magenta">';
var_dump($rezystor1);
echo '</pre>';

echo $rezystor1->formatujWartość();
