<?php

require_once('src/Autoload/src/Autoload/Autoload.php');

use Autoload\Autoload;

$al = new Autoload();
$al->registerNamespace('Ferret', 'src');
$al->register();
