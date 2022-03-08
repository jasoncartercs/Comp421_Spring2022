<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
require "appointmentsAPI/include/bootstrap.php";
 
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

if ((isset($uri[2]) && $uri[2] == 'company') &&  isset($uri[3])) {
    require "appointmentsAPI/Controller/Api/CompanyController.php";
    $objFeedController = new CompanyController();
    $strMethodName = $uri[3] . 'Action';
    
    if(isset($uri[4])) {
        $objFeedController->{$strMethodName}($uri[4]); 
    }
    else {
        $objFeedController->{$strMethodName}(); 
    }
}
if ((isset($uri[2]) && $uri[2] == 'serviceProvider') &&  isset($uri[3])) {
    require "appointmentsAPI/Controller/Api/ServiceProviderController.php";
    $objFeedController = new ServiceProviderController();
    $strMethodName = $uri[3] . 'Action';
    
    if(isset($uri[4])) {
        $objFeedController->{$strMethodName}($uri[4]); 
    }
    else {
        $objFeedController->{$strMethodName}(); 
    }
}
else {
    //we don't have access
    header("HTTP/1.1 404 Not Found");
    exit();
}
?>