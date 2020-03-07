<?php 
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

$config['rabbitmq'] = [
    'host' => 'localhost',
    'port' => '5672',
    'user' => 'user',
    'pass' => 'pass',
    'vhost' => '/',
];