<?php

/*
 *
 *                                  DOCUMENTACION
 * 
 *  ######## <><><> https://newsapi.org/docs/endpoints/top-headlines <><><> ########
 * 
*/

require_once "app/variablesGET.php";





$url = "https://newsapi.org/v2/top-headlines?".$language.$category."&apiKey=".$apiKey;

// $result = file_get_contents($url);
// $newsData = json_decode($result);
