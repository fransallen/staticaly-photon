<?php
/**
 * Plugin Name: Statically Photon
 * Description: Replace Photon CDN URL with Statically.
 * Plugin URI: https://statically.io
 * Author: Frans Allen
 * Author URI: https://statically.io
 * Version: 0.0.2
 * Text Domain: statically-photon
 * Domain Path: /languages/
 * License: GPLv2 or later
 *
 * @package Statically
 */

function statically_photon_url($cdn)

{

    $cdn = 'https://cdn.statically.io/img';

    return $cdn;

}

add_filter('jetpack_photon_domain', 'statically_photon_url', 10, 1);
