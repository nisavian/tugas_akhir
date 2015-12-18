<?php
error_reporting(E_ALL);
ini_set('display_error',1);

require_once 'nusoap/lib/nusoap.php';
require_once 'adodb/adodb.inc.php';
require_once 'cuaca_soap.php';
$server = new nusoap_server();
$server->configureWSDL('Service Cuaca','urn:cuaca');
$server->wsdl->schemaTargetNamespace = 'urn:cuaca';

$server->register('get_cuaca_by_id',
  array(
    'id' => 'xsd:string'),
    array(
      'return' => 'xsd:string'
    ),
    'urn:cuaca ',
    'urn:cuaca#get_cuaca_by_id',
    'rpc',
    'encoded',
    'get_cuaca_by_id'
  );

function get_cuaca_by_id($id="") {
  $cuaca = new Cuaca();
  return $cuaca->get_cuaca_by_id($id);
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>