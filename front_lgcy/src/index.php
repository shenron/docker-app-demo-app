<?php 
session_start();
header('Content-Type: application/json');

if(!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
}
$_SESSION['count'] = $_SESSION['count'] + 1;

$api_response = [
  'origin_server' => gethostname(),
  'URI' => $_SERVER['REQUEST_URI'],
  'URI_PHP_INFO' => '/front-lgcy/phpinfo.php',
  'session_id' => session_id(),
  'count' => $_SESSION['count']
];
echo json_encode($api_response);
