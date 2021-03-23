
> composer req fjjreal/weather

# way 1

- add config/app.php ==> providers ==> Fjjreal\Weather\WeatherManagerProvider::class,

- php artisan vendor:publish --provider="Fjjreal\Weather\WeatherManagerProvider"

- edit config/weather.php ==> {$sp} ==> params ==> key & token & ...

- use

```
Route::get('/base', function () {
    $configs = config('weather');
    $configs[$configs['sp']]['params']['city'] = 330424;
    return \Fjjreal\Weather\Facades\WeatherManager::makeSP($configs)->current();
});
```

# way 2

- add config/app.php ==> providers ==> Fjjreal\Weather\WeatherServiceProvider::class,

- php artisan vendor:publish --provider="Fjjreal\Weather\WeatherServiceProvider::class"

- edit config/weather.php ==> "amap" ==> params ==> key & token & ...

- use

```
Route::get('/all', function () {
    return \Fjjreal\Weather\Facades\Weather::forecast();
});
```

