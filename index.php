<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

require_once "vendor/autoload.php";
use jcobhams\NewsApi\NewsApi;

require_once "./core.php";

$url = URL.API_KEY."".GET_VARS_DEFAULT;

$responseClass = new Response();
$newsapi = new NewsApi(API_KEY);

// $category = NULL; 
// $pagesize = NULL;
// $country = NULL; 
// $sources = NULL; 
// $q = NULL;
// $excludedomains = NULL;
// $from = NULL;
// $to = NULL;
// $language = NULL;
// $sortby = NULL;


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $category; 
    $pagesize;
    $response;

    if (!isset($_GET['apiKey'])) {
        $response = $responseClass->error_apiKeyMissing();
    } elseif ($_GET['apiKey'] !== API_KEY) {
        $response = $responseClass->error_apiKeyInvalid();
    } elseif (  !isset($_GET['sources']) &&
                !isset($_GET['q']) &&
                !isset($_GET['language']) &&
                !isset($_GET['country']) &&
                !isset($_GET['category'])
    ) {
        $response = $responseClass->error_parametersMissing();
    } elseif (isset($_GET['pagesize'])) {
        if ($_GET['pagesize'] > '100') {
            $response = $responseClass->error_maximumResultsReached($_GET['pagesize']);
        }
    }else {
        if (isset($_GET['category'])) {
            $category=$_GET['category'];
        }else {
            $category='general';
        }
        if (isset($_GET['pagesize'])) {
            $pagesize=$_GET['pagesize'];
        }else {
            $pagesize='50';
        }
        $response = $newsapi->getTopHeadlines($q=NULL, $sources=NULL, $country='us', $category=$category, $page_size=$pagesize, $page=NULL);
    }
    
    echo json_encode($response);
    

}else {
    $response = $responseClass->error_405();
    echo json_encode($response);
}


