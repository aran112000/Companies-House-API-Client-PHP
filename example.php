<?php
/*
 * This is an example API request to search for matching companies
 * */
require('client.php');
$api_key = 'YOUR-API-KEY-HERE'; // Get your API key from here: https://developer.companieshouse.gov.uk
$company_name = 'Example Company'; // The company name you're searching for

$api = new companiesHouseApi($api_key);
$response = $api->send('/search/companies', ['q' => $company_name]); // Process API request

// Handle the API response below here...
echo '<p><pre>' . print_r($response, true) . '</pre></p>';
