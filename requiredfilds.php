<?php

/**
 * Ensures that the module init file can't be accessed directly, only within the application.
 */
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Required Filds
Description: Module modify filds in Perfex.
Version: 1.0.0
Requires at least: 2.3.*
*/

define('REQUIREDFILDS_MODULE_NAME', 'requiredfilds');

$CI = &get_instance();
$custonfilds = array();


/**
 * Load the requiredfilds helper
 */
$CI->load->helper(REQUIREDFILDS_MODULE_NAME . '/requiredfilds');

