<?php


# Un solo parametro
$country = ""; // El código ISO 3166-1 de 2 letras del país del que desea obtener titulares.

# Un solo parametro
$category = "";

# Un solo parametro y No mezclar con contry ni category
$sources = "";

# Palabra clave de la busqueda
$q = "";

# Cantidad de resultados a devolver por defecto min=20 y un max=100
$pageSize = "&pageSize=100";

# Ecluir dominios de los resiltados se separan por comas &excludeDomains=bbc.co.uk,techcrunch.com,engadget.com
$excludeDomains = "";


/*
    Fechas 
 */
$Time_Today = date("Y-m-d");
$Time_Before_Week = date("Y-m-d", strtotime($Time_Today."- 1 week"));
/*
 */
# Fecha de inicio
$from = "&from=".$Time_Before_Week; // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46

# Fecha de fin
$to = "&to=".$Time_Today; // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46

# Lenguajes
$language = "";

# Orden de los articulos
// relevancy = articles more closely related to q come first.
// popularity = articles from popular sources and publishers come first.
// publishedAt = newest articles come first.
$sortBy = "";
/**************************************************** */
if (!empty($_GET['pais'])){
    $value_country = strtolower($_GET['pais']);
    $country = "&country=".$value_country;
}
if (!empty($_GET['categoria'])){
    $value_category = $_GET['categoria'];
    $category = "&category=".$value_category;
}else {
    $category = "&category=technology";
}
// if (){
//     $value_sources = ;
//     $sources = "&sources=".$value_sources;
// }
if (!empty($_GET['search'])){
    $value_q = $_GET['search'];
    $q = "&q=".$value_q;
}
// if (!empty($_GET['categoria'])){
//     $value_pageSize = ;
//     $pageSize = "&pageSize=".$value_pageSize;
// }
// if (!empty($_GET['categoria'])){
//     $value_excludeDomains = ;
//     $excludeDomains = "&excludeDomains=".$value_excludeDomains;
// }
// if (){
//     $value_from = ;
//     $from = "&from=".$value_from;
// }
// if (){
//     $value_to = ;
//     $to = "&to=".$value_to;
// }
if (!empty($_GET['idioma'])){
    $value_language = $_GET['idioma'];
    $language = "&language=".$value_language;
}else {
    $language = "&language=es";
}
if (!empty($_GET['sortBy'])){
    $value_sortBy = $_GET['sortBy'];
    $sortBy = "&sortBy=".$value_sortBy;
}




