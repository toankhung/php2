<?php
require_once './vendor/autoload.php';
require_once './App/Core/function.php';
use App\Core\Route;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
echo $_SESSION['admin_id'];
// unset($_SESSION["admin_id"]);
$App = new Route();

