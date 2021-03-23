<?php
/**
 * Created By fjj
 * Time: 2021/3/23 10:22
 */

namespace Fjjreal\Weather;


interface IWeather
{
    public function current() : array ;
    public function forecast() : array ;
}
