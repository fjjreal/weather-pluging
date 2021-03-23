<?php
/**
 * Created By fjj
 * Time: 2021/3/23 10:21
 */

namespace Fjjreal\Weather;


use GuzzleHttp\Exception\BadResponseException;

class AmapService extends BaseWeather
{

    public $configs;

    public function __construct($configs)
    {
        $this->configs = $configs;
    }

    public function current() : array
    {
        $this->configs[$this->configs['sp']]['params']["extensions"] = "base";
        $url = $this->configs[$this->configs['sp']]['url'].http_build_query($this->configs[$this->configs['sp']]['params']);
        return $this->httpGet($url);
    }

    public function forecast() : array
    {
        $this->configs[$this->configs['sp']]['params']["extensions"] = "all";
        $url = $this->configs[$this->configs['sp']]['url'].http_build_query($this->configs[$this->configs['sp']]['params']);
        return $this->httpGet($url);
    }

}
