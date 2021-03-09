<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
Module Name: Required Filds
Description: Module modify filds in Perfex.
Version: 1.0.0
Requires at least: 2.3.*
*/

define('VERSIONING', get_instance()->app_scripts->core_version());

hooks()->add_action('app_admin_footer', 'requiredfilds_add_footer_components');


function requiredfilds_add_footer_components()
{
    // loaded files js and css
    echo '<script type="text/javascript" src="' . base_url('modules/requiredfilds/assets/js/requiredfilds.js') . '" /></script>';
}