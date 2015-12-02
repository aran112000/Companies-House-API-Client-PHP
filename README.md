# Companies House API Client (PHP)
A very simple, lightweight client written in PHP for interfacing with the Companies House API. This is not an official client.

NOTE: This API was in BETA at the time of writing this and as such, things may change with their API in the future.

**Here's a simple exmaple of the client in action:**
```PHP
<?php
/*
 * This is an example API request to search for matching companies
 * */
$api_key = 'YOUR-API-KEY-HERE'; // Get your API key from here: https://developer.companieshouse.gov.uk
$company_name = 'Example Company'; // The company name you're searching for

$api = new companiesHouseApi($api_key);
$response = $api->send('/search/companies', ['q' => $company_name]); // Process API request

// Handle the API response below here...
echo '<p><pre>' . print_r($response, true) . '</pre></p>';
```

**Based on the above example, here's how a valid response would appear:**
```
Array
(
    [countryCode] => 'GB'
    [vatNumber] => 'VAT Number'
    [requestDate] => 2015-12-02+01:00
    [valid] => 1
    [name] => 'Company name...'
    [address] => 'Address...'
)
```
