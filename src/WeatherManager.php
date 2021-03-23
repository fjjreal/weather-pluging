<?php
/**
 * Created By fjj
 * Time: 2021/3/23 10:07
 */

namespace Fjjreal\Weather;

/**
 * @method
 * Class WeatherManager
 * @package Fjjreal\Weather
 */
class WeatherManager
{

    public $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function makeSP($configs) : BaseWeather
    {
        $sp_name = $configs['sp'];
        $func = 'create'.ucfirst($sp_name).'Service';
        return $this->$func($configs);
    }

    public function createAmapService($configs) : BaseWeather
    {
        return new AmapService($configs);
    }

}
