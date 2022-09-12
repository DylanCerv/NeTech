<?php

/*
 *
 *                                  DOCUMENTACION
 * 
 *  ######## <><><> https://newsapi.org/docs/endpoints/top-headlines <><><> ########
 * 
*/

require_once "app/variablesGET.php";

require_once "app/modules/filter.php";


$url = "https://newsapi.org/v2/top-headlines?".$apiKey.$country.$category.$sources.$q.$pageSize.$excludeDomains.$from.$to.$language.$sortBy;


// $url = "https://newsapi.org/v2/top-headlines?".$apiKey;

print_r($url);

// var_dump(file_get_contents($url));die;

// $result = ;
$newsData = json_decode($url);




