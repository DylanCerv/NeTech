<?php

/**
 * 
 */
function apiKey ($responseClass, $key) {
    if (!isset($_GET['apiKey'])) {
        return $responseClass->error_apiKeyMissing();
    } else if ($_GET['apiKey'] !== $key) {
        return $responseClass->error_apiKeyInvalid();
    }
}

/**
 * 
 */
function parametersMissing ($responseClass, $key) {
    if (!isset($_GET['sources']) &&
        !isset($_GET['q']) &&
        !isset($_GET['language']) &&
        !isset($_GET['country']) &&
        !isset($_GET['category'])
    ) {
        return $responseClass->error_parametersMissing();
    }
}


/**
 * 
 */
function maximumResultsReached ($responseClass) {
    if (isset($_GET['pagesize'])) {
        if ($_GET['pagesize'] > '100') {
            return $responseClass->error_maximumResultsReached($_GET['pagesize']);
        }
    }
}



/**
 * 
 */
function get_varGETs () {
    if ( isset($_GET['country']) ) {
        $country = $_GET['country'];
    }
    if ( isset($_GET['category']) ) {
        $category = $_GET['category'];
    }
    if ( isset($_GET['sources']) ) {
        $sources = $_GET['sources'];
    }
    if ( isset($_GET['q']) ) {
        $q = $_GET['q'];
    }
    if ( isset($_GET['pagesize']) ) {
        $pagesize = $_GET['pagesize'];
    }
    if ( isset($_GET['excludedomains']) ) {
        $excludedomains = $_GET['excludedomains'];
    }
    if ( isset($_GET['from']) ) {
        $from = $_GET['from'];
        if ( isset($_GET['to']) ) {
            $to = $_GET['to'];
        }
    }
    if ( isset($_GET['language']) ) {
        $language = $_GET['language'];
    }
    if ( isset($_GET['sortby']) ) {
        $sortby = $_GET['sortby'];
    }
    return [
        $country, 
        $category, 
        $sources, 
        $q,
        $pagesize,
        $excludedomains,
        $from,
        $to,
        $language,
        $sortby
    ];
}