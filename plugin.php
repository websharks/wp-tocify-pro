<?php
/**
 * Plugin.
 *
 * @wp-plugin
 *
 * Version: 160715.31930
 * Text Domain: wp-tocify
 * Plugin Name: WP Tocify Pro
 *
 * Author: WP Sharks™
 * Author URI: https://wpsharks.com
 *
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * Plugin URI: https://wpsharks.com/product/wp-tocify-pro
 * Description: Automatic Table of Contents (TOC) generation for WordPress.
 */
// PHP v5.2 compatible.

if (!defined('WPINC')) {
    exit('Do NOT access this file directly: '.basename(__FILE__));
}
require dirname(__FILE__).'/src/includes/wp-php-rv.php';

if (require(dirname(__FILE__).'/src/vendor/websharks/wp-php-rv/src/includes/check.php')) {
    require_once dirname(__FILE__).'/src/includes/plugin.php';
} else {
    wp_php_rv_notice('WP Tocify Pro');
}
