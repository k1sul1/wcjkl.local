<?php

$uri = $_SERVER['REQUEST_URI'];
$allowed = ['/wp-admin', '/wp-json', '/wp-login'];

foreach ($allowed as $x) {
  if (strpos($uri, $x) !== false) {
    // WordPress view bootstrapper
    define('WP_USE_THEMES', true);
    require(dirname( __FILE__ ) . '/wordpress/wp-blog-header.php');
    die();
  }
} ?>
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"><meta name="theme-color" content="#222222"><link rel="manifest" href="/manifest.json"><link rel="shortcut icon" href="/favicon.ico"><title>WordPress SPA</title><link href="/static/css/main.6495384e.css" rel="stylesheet"></head><body><noscript>You need to enable JavaScript to run this app.</noscript><div id="root"></div><script type="text/javascript" src="/static/js/main.753f6a99.js"></script></body></html>