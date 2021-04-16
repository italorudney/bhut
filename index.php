<?php
require_once "./vendor/autoload.php";

use Api\Controller\Multiplos;

$multiplos = new Multiplos();
$multiplos->mostraNumeros(100);