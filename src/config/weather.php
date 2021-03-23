<?php
/**
 * Created By fjjreal
 * Time: 2021/3/22 9:51
 */

return [
    "options"=>[
        "default"=> 1,
        "default2"=> 123456,
    ],

    /* 服务商名称
     * 高德 amap
     * 墨迹 moji
     */
    "sp" => "amap",

    "amap" => [
        "url" => "https://restapi.amap.com/v3/weather/weatherInfo?",
        "method" => "GET",

        "params" => [
            "key" => "",
            "city" => 330203,
            "extensions" => "base", // base all
        ]
    ],

    // "moji" => [
    //     "24hUrl" => "http://aliv18.data.moji.com/whapi/json/alicityweather/forecast24hours",
    //     "15dUrl" => "http://aliv18.data.moji.com/whapi/json/alicityweather/forecast15days",
    //     "url" => "http://aliv18.data.moji.com/whapi/json/alicityweather/condition",
    //     "method" => "POST",
    //
    //     "params" => [
    //         "extensions" => "base", // base 24h 15d
    //         "key" => "", // AppCode
    //         "token" => ""
    //     ]
    // ],

];
