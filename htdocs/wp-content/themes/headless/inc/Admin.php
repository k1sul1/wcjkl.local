<?php
/**
 * Tweaks to admin live here.
 */
namespace Vincit\Admin;

if (is_admin()) {
  if (class_exists("GlobalMetaBoxOrder\\Config")) {
    class_alias('\GlobalMetaBoxOrder\Config', 'MetaBoxConfig');

    \MetaBoxConfig::$getBlueprintUserId = function () {
      return 2;
    };

    // Admin user sets the post count and visible columns, user can't configure them
    \MetaBoxConfig::$remove_screen_options = true;

    // Same with metaboxes.
    \MetaBoxConfig::$lock_meta_box_order = true;
  }
}

// Users who will edit navigations will wonder where are the options
// if this doesn't exist.
add_action("user_register", function ($user_id) {
  update_user_option($user_id, "metaboxhidden_nav-menus", [

  ]); // No hidden metaboxes. Show them all.
}, 10);

/**
 * Show draft and private pages in hierarchicial Parent pages dropdown.
 * will work for any hier. post type.
 * https://gist.github.com/wkw/f32b1391b94aa0db459e1fe01a379b66
 */
function filter_attributes_dropdown_pages_args($dropdown_args) {
    $dropdown_args['post_status'] = array('publish','draft', 'private');
    return $dropdown_args;
}

add_filter('page_attributes_dropdown_pages_args', __NAMESPACE__ . '\\filter_attributes_dropdown_pages_args', 100, 1);
add_filter('quick_edit_dropdown_pages_args', __NAMESPACE__ . '\\filter_attributes_dropdown_pages_args', 100, 1);
