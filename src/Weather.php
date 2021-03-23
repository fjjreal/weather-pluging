<?php
/**
 * Created By fjj
 * Time: 2021/3/22 9:52
 */

namespace Fjjreal\Weather;

class Weather extends BaseWeather
{

    public $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function current() : array
    {
        $configs = config('weather');
        $configs['amap']['params']['extensions'] = "base";
        $url = $configs['amap']['url'].http_build_query($configs['amap']['params']);
        return $this->httpGet($url);
    }

    public function forecast() : array
    {
        $configs = config('weather');
        $configs['amap']['params']['extensions'] = "all";
        $url = $configs['amap']['url'].http_build_query($configs['amap']['params']);
        return $this->httpGet($url);
    }


}
