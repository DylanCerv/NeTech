<?php

require_once "vendor/autoload.php";

use jcobhams\NewsApi\NewsApi;

$apiKey = "4e87151f80cd43ffa1b9ecc8f9cbde3c";




# Un solo parametro
$country = "us"; // El código ISO 3166-1 de 2 letras del país del que desea obtener titulares.

# Un solo parametro
$category = "technology";

# Un solo parametro y No mezclar con contry ni category
$sources = "bbc-news";

# Palabra clave de la busqueda
$q = "trump";

# Cantidad de resultados a devolver por defecto min=20 y un max=100
$page_size = "25";

# Ecluir dominios de los resiltados se separan por comas &excludeDomains=bbc.co.uk,techcrunch.com,engadget.com
$excludeDomains = "";

# Fecha de inicio
$from = "2022-05-10"; // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46

# Fecha de fin
$to = "2022-05-01"; // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46

# Lenguajes
$language = "es";

# Orden de los articulos
// relevancy = articles more closely related to q come first.
// popularity = articles from popular sources and publishers come first.
// publishedAt = newest articles come first.
$sortBy = "popularity";




$newsapi = new NewsApi($apiKey);

# /v2/everything
// $all_articles = $newsapi->getEverything($q, $sources, $domains, $exclude_domains, $from, $to, $language, $sort_by,  $page_size, $page);

// # /v2/top-headlines
$top_headlines = $newsapi->getTopHeadlines($q=NULL, $sources=NULL, $country='us', $category=$category, $page_size='30', $page=NULL);

// # /v2/top-headlines/sources
// $sources = $newsapi->getSources($category, $language, $country);

// var_dump($top_headlines);
// var_dump($top_headlines['articles']);
$newsData = $top_headlines;
