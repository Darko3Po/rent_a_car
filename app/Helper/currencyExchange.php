<?php

namespace App\Helper;

class CurrencyExchange
{

    public static function getExchangeRate($currency){
        
    $endpoint = 'https://api.exchangeratesapi.io/v1/?base=USD';
    $access_key = '8lvxgBssuOphuzbbI0lc0ECTOqKWOrdv';

    // Initialize CURL:
    $ch = curl_init('https://api.exchangeratesapi.io/v1/'.$endpoint.'?access_key='.$access_key.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Store the data:
    $json = curl_exec($ch);
    curl_close($ch);

    // Decode JSON response:
    $exchangeRates = json_decode($json, true);

    // Access the exchange rate values, e.g. GBP:
    return $exchangeRates['rates'][$currency];
    }

}