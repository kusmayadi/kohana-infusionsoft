<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Infusionsoft SDK for Kohana
 *
 * @author Kusmayadi
 * @copyright 2012 Kusmayadi
 * @license MIT
 */
abstract class Cobacobi_Infusionsoft {
    
    /**
     * The constructor accepts a configuration. By default the configuration will be taken from config/infusionsoft.php
     *
     * @param String $api_service_url Infusionsoft API Service URL
     * @param String $passphrase Infusionsoft API Passphrase
     * @param String $key Infusionsoft Encrypted Key
     */
    public function __construct()
    {
        return new iSDK;       
    }
    
}