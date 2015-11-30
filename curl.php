<?php
    
    include 'db.php';

    $geoUrl = "https://geocode-maps.yandex.ru/1.x/?format=json&geocode=";
    $address = "Омск, 33 Северная, дом 122";
    $settingUrl = $geoUrl.$address;

    $ch = curl_init();
    $opt = [
            CURLOPT_URL => $settingUrl, 
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => 1
            ];
    curl_setopt_array($ch, $opt);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;