<?php
    //現在の時刻
    $now = new DateTime();
    $now = $now->format('Y年m月d日');

    //大阪の緯度: 34.7 経度: 135.5
    $api_key = '832b99ee1f9f461a785f116bb7af3c3d';
    $city = "Osaka";
    $base_url = "http://api.openweathermap.org/data/2.5/forecast";
    $url = "$base_url?zip=550-0001,jp&units=metric&cnt=3&appid=$api_key";
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $result = json_decode($json,true);
    //天気取得時の時刻
    $time = $result["list"][0]["dt_txt"];
    //天気
    $weather = $result["list"][2]["weather"][0]["main"];
    //気温
    $temp = $result["list"][0]["main"]["temp"];


?>
