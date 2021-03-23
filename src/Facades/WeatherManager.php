<?php
/**
 * Created By fjjreal
 * Time: 2021/3/22 9:56
 */

namespace Fjjreal\Weather\Facades;


use Fjjreal\Weather\BaseWeather;
use Illuminate\Support\Facades\Facade;

/**
 * @method static BaseWeather makeSP(array $configs)
 * Class Weather
 * @package Fjjreal\Weather\Facades
 */
class WeatherManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "WeatherManager";
    }
}
