<?php
require_once __DIR__.'/includes/jsonRPCClient.php';
$exemplo = new jsonRPCClient('http://jsonrpcphp.org/server.php');

echo 'retorno do campo NAME do request : '.$exemplo->giveMeSomeData('name').'</i><br />'."\n";
?>