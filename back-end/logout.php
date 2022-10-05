<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();
$_SESSION['response_code'] = 666;
header("Location: ../front-end/homepage.php");

$logger = new Logger('login');
$logger->pushHandler(new StreamHandler(dirname(__FILE__) . '/html_pubblico.log', Logger::INFO));
$logger->info("User " . $_SESSION['username'] . " logged out");
?>