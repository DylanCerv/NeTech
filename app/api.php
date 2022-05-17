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

$result = file_get_contents($url);
$newsData = json_decode($result);




