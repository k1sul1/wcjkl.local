<?php
namespace Vincit\REST;

add_action("rest_api_init", function () {
  remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');

  // Add a Custom filter.
  add_filter('rest_pre_serve_request', function ($value) {
    if (\Vincit\is_prod()) {
      $entries = \Vincit\Options\get("allowed_cors");
      $domains = [];

      foreach ($entries as $entry) {
        $domains[] = $entry["url"];
      }

      $domain = in_array($_SERVER["HTTP_ORIGIN"], $domains)
        ? $_SERVER["HTTP_ORIGIN"]
        : "https://pwademo.kisu.li";

      header("Access-Control-Allow-Origin: $domain");
    } else {
      header('Access-Control-Allow-Origin: *');
    }

    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Credentials: true');

    return $value;
  });
});
