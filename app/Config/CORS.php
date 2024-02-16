<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class CORS extends BaseConfig
{
    public $allowHeaders = ['Content-Type', 'X-Requested-With'];
    public $allowMethods = ['*'];
    public $allowOrigins = ['*'];
    public $allowCredentials = false;
    public $maxAge = 3600;
}
