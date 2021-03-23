<?php
/**
 * Created By fjjreal
 * Time: 2021/3/22 9:56
 */

namespace Fjjreal\Weather\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static array current()
 * @method static array forecast()
 * Class Weather
 * @package Fjjreal\Weather\Facades
 */
class Weather extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "weather";
    }
}
