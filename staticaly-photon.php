<?php
/**
 * Plugin Name: Staticaly Photon
 * Description: Replace Photon CDN URL with Staticaly.
 * Plugin URI: https://www.staticaly.com
 * Author: Frans Allen
 * Author URI: https://www.marsble.com/u/frans
 * Version: 0.0.1
 * Text Domain: staticaly-photon
 * Domain Path: /languages/
 * License: GPLv2 or later
 *
 * @package Staticaly
 */

function staticaly_photon_url($cdn)

{

    $cdn = 'https://cdn.staticaly.com/img';

    return $cdn;

}

add_filter('jetpack_photon_domain', 'staticaly_photon_url', 10, 1);
