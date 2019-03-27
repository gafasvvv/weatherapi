<?php

    //緯度: 34.689224 経度: 135.491991
    $api_key = '832b99ee1f9f461a785f116bb7af3c3d';
    $city = "Osaka";
    $url = "http://api.openweathermap.org/data/2.5/weather?q=osaka,jp&units=metric&appid=832b99ee1f9f461a785f116bb7af3c3d";
    $json = file_get_contents($url);
    $result = json_decode($json);
    var_dump($result);
    exit();