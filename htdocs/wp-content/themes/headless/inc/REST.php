<?php
namespace Vincit\REST;

add_action("rest_api_init", function () {
  remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');

  // Add a Custom filter.
  add_filter('rest_pre_serve_request', function ($value) {
    if (\Vincit\is_prod()) {
      header('Access-Control-Allow-Origin: https://pwademo.kisu.li');
    } else {
      header('Access-Control-Allow-Origin: *');
    }

    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Credentials: true');

    return $value;
  });
});
