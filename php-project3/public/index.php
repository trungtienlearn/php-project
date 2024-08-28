<?php
session_start();
require_once '../vendor/autoload.php';
define("URL_BASE", $_SERVER['SERVER_NAME']);
use App\Core\App;

$app = new App;
?>