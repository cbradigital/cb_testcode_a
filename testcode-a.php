<?php
/*
Plugin Name:  CBRA - Iulia-Testcode A
Version: 1.0
Description: Testcode zur Komponenteninstallation, A
Author: CBRA-Media
Author URI: https://www.cbra-media.com/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: cbra-testcode-a
*/

add_shortcode('cb_testcode_a', 'cb_render_testcode_a');
function cb_testcode_a_init() {
  function cb_render_testcode_a() {
    $output = 'Das Testplugin A funktioniert!';
    return $output;
  }
}
add_action('init', 'cb_testcode_a_init');

?>
