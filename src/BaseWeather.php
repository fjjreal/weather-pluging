<?php
/**
 * Created By fjj
 * Time: 2021/3/23 12:56
 */

namespace Fjjreal\Weather;


class BaseWeather implements IWeather
{
    protected function httpGet($url)
    {
        try {
            $http = new \GuzzleHttp\Client;
            $response = $http->get($url);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return json_decode((string)$response->getBody(), true);
    }

    protected function httpPost($url,$params,$others = [])
    {
        $others['form_params'] = $params;
        try {
            $http = new \GuzzleHttp\Client;
            $response = $http->post($url,$others);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return json_decode((string)$response->getBody(), true);
    }

    public function current()  : array
    {
        return [];
    }

    public function forecast()  : array
    {
        return [];
    }
}
