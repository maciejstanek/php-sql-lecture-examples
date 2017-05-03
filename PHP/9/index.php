<?php

function __autoload($class) {
	include_once 'szukaj_tutaj/'.$class.'.php';
}

$żart = new KlasaB;
$żart->przykładowaMetoda();
