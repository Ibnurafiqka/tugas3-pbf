<?php
namespace Config;

use CodeIgniter\Config\BaseConfig as CIBaseConfig;

class BaseConfig extends CIBaseConfig
{
    /**
     * Base configuration file
     * 
     * This class can be used to provide default configurations
     * or to extend system configurations.
     */
    public function __construct()
    {
        parent::__construct();
        
        // You can add any default configuration settings here if needed
    }
}