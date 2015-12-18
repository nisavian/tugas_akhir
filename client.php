<?php
error_reporting(E_ALL);
ini_set('display_error',1);

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/weather/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$id =  isset($_GET["id"]) ? $_GET["id"] : '' ;

$result = $client->call('get_cuaca_by_id', array('id'=>$id));
$data = json_decode($result);
// echo '<pre>';
// print_r($data);
// echo '</pre>';
?>