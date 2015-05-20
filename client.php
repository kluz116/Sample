<?php

ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
try {
	$wsdl ='http://localhost:8088/mockUMMServicePortBinding?WSDL';
    $client = new SoapClient($wsdl,array("trace"=>1,"exceptions"=>0));
    $serviceId = "20";
    $name='Allan';
    $value='200';

    $parameter = array("serviceId"=>$serviceId,"name"=>$name,"value"=>$value);
    $results = $client->ConfirmThirdPartyPayment($parameter);
    print "<pre>\n";
    print_r($results);
    print "</pre>";
} catch (SoapFault $exception) {
	echo 'EXCEPTION='.$exception;  
}



?>
