<?php
/**
 * Created By fjj
 * Time: 2021/3/22 9:52
 */

namespace Fjjreal\Weather;


use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class Weather
{

    /**
     * @var Repository
     */
    protected $config;

    /**
     * Weather constructor.
     * @param Repository $config
     */
    public function __construct(Repository $config)

    {
        $this->config = $config;
    }

    public function test_rtn($msg = ''){
        $config_arr = $this->config->get('weather.options');
        return $msg.' <strong>from your custom develop package!</strong>>'.'-----'.$config_arr['default'].'----'.$config_arr['default2'];
    }

}
