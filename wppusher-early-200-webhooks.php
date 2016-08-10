<?php

/**
 * Plugin Name: WP Pusher Early 200 Webhooks
 * Description: Return 200 before webhooks has processed request. Requires fastcgi.
 * Version: 0.0.1
 */

// If this file is called directly, abort.
use Pusher\Pusher;

if ( ! defined('WPINC')) {
    die;
}

require __DIR__ . '/autoload.php';

add_action('wppusher_register_dependency', function(Pusher $pusher) {
    $pusher->bind('Pusher\Dashboard', 'PusherEarlyHooks\Dashboard');
});
